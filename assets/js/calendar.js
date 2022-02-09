const config = {
    search: false, // Toggle search feature. Default: false
    creatable: false, // Creatable selection. Default: false
    clearable: false, // Clearable selection. Default: false
    multiple: true,
    maxHeight: "360px", // Max height for showing scrollbar. Default: 360px
    size: "", // Can be "sm" or "lg". Default ''
};
dselect(document.querySelector("#assigned_garbage"), config);
// Variables
let calendar;
let calendarContainer = document.querySelector(" #calendar_container");
let ConfirmBtn = document.querySelector("#ConfirmBtn");

calendarGenerator();
ConfirmBtn.addEventListener("click", updateRecord);

// Select all and show a dynamic table

function calendarGenerator() {
    fetch("./app/calendar/read.php", {
        method: "POST",
        header: {
            "Content-Type": "application/json",
        },
    }).then((response) =>
        response
        .json()
        .then((data) => {
            calendar = data;
            console.log("Received Data: ", data);
            let table = `
                <table class="table  text-center">
                    <thead>
                        <tr>
                            <th scope="col">Day</th>
                            <th scope="col">Assigned Member</th>
                            <th scope="col">Assigned Garbage</th>
                            <th class="text-end" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${rowGenerator(data)}
                    </tbody>
                </table>
                `;
            calendarContainer.insertAdjacentHTML("beforeend", table);
            let updateBtn = document.querySelectorAll(".update_btn");

        })
        .catch((error) => {
            console.error("Error: ", error);
        })
    );
}

function rowGenerator(day) {
    let rows = "";
    let i = 1;
    day.forEach((day) => {
        let row = `
                    <tr scope="row">
                        <td>${day.day}</td>
                        <td>${day.assigned_user}</td>
                        <td>${day.assigned_garbage}</td>
                        <td class="text-end">
                            <button class="update_btn btn btn-success update_member mx-2" onClick="OpenForm(this.id)" id="${day.id}"><i class="m-1 far fa-edit"></i></button>
                        </td>
                    </tr>
                    `;
        rows += row;
        i++;
    });
    return rows;
}

function OpenForm(e) {
    id = e;
    console.log(id);
    document.querySelector('#hidden').setAttribute("value", id);
    document.querySelector(".updateRecordForm").style.display = "block";
}

//INSERT function

// Close the insert form

function closeForm_update() {
    document.querySelector(".updateRecordForm").style.display = "none";
}

// Update row function

function updateRecord() {
    let assigned_user = document.querySelector("#assigned_user").value;
    let assigned_garbage = $("#assigned_garbage").val();
    console.log("Record Updated.");
    console.log("Id: ", id);
    console.log("Name: ", assigned_user);
    console.log("Garbage: ", assigned_garbage);
    const formData = new FormData();
    formData.append("id", id);
    formData.append("assigned_user", assigned_user);
    formData.append("assigned_garbage", assigned_garbage);

    fetch("./app/calendar/update.php", {
        method: "POST",
        header: {
            "Content-Type": "application/json",
        },
        body: formData,
    }).then((response) =>
        response
        .json()
        .then((data) => {
            console.log(data);
        })
        .catch((error) => {
            console.error("Error: ", error);
        })
    );
}

function reloadTable() {
    let table = document.querySelector(".table");
    calendarContainer.removeChild(table);
    calendarGenerator();
}