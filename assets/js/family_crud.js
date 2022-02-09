// const config = {
//     search: false, // Toggle search feature. Default: false
//     creatable: false, // Creatable selection. Default: false
//     clearable: false, // Clearable selection. Default: false
//     multiple: true,
//     maxHeight: '360px', // Max height for showing scrollbar. Default: 360px
//     size: '', // Can be "sm" or "lg". Default ''
// }
// dselect(document.querySelector('#assigned_day'), config)
// Variables
let family;
let tableContainer = document.querySelector(" #table_container");
let insertBtn = document.querySelector("#insert_btn");
let updateConfirmBtn = document.querySelector("#updateConfirmBtn");
let deleteAllBtn = document.querySelector("#deleteAll_btn");

tableGenerator();
insertBtn.addEventListener("click", newRecord);
updateConfirmBtn.addEventListener('click', updateRecord);
// deleteAllBtn.addEventListener("click", deleteAllRecord);

// Select all and show a dynamic table 

function tableGenerator() {
    fetch('./app/family/read.php', {
            method: 'POST',
            header: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json()
            .then(data => {
                family = data;
                console.log('Received Data: ', data);
                let table = `
                <table class="table  text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Member's Name</th>
                            <th class="text-end" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${rowGenerator(data)}
                    </tbody>
                </table>
                `;
                tableContainer.insertAdjacentHTML('beforeend', table);
                let deleteBtn = document.querySelectorAll(".delete_btn");
                let updateBtn = document.querySelectorAll(".update_btn");

                // Delete record event
                for (let i = 0; i < deleteBtn.length; i++) {
                    deleteBtn[i].addEventListener("click", deleteRecord);
                }
            })
            .catch((error) => {
                console.error('Error: ', error);
            }));
}


function rowGenerator(member) {
    let rows = '';
    let i = 1;
    member.forEach(member => {
        let row = `
                    <tr scope="row">
                        <td>${i}</td>
                        <td>${member.name}</td>
                        <td class="text-end">
                            <button onClick="openForm_update(this.id)" class="update_btn btn btn-success update_member  mx-2" id="${member.id}"><i class="m-1 far fa-edit"></i></button>
                            <button class="delete_btn btn btn-danger delete_member" data-val="${member.id}"><i class="m-1 fas fa-user-minus"></i></button>
                        </td>
                    </tr>
                    `;

        rows += row;
        i++;
    });
    return rows;
}

function openForm_update(e) {
    id = e;
    console.log(id);
    document.querySelector("#hidden_id").setAttribute('value', id);

    document.querySelector(".updateRecordForm").style.display = "block";
}


//INSERT function

function newRecord() {
    const formData = new FormData();
    let name = document.querySelector("#name").value;
    formData.append('name', name);
    fetch('./app/family/create.php', {
            method: 'POST',
            header: {
                'Content-Type': 'application/json'
            },
            body: formData
        })
        .then(response => response.json()
            .then(data => {
                console.log(data);
            })
            .catch((error) => {
                console.error('Error: ', error);
            }));
}

// Open and close the insert form

function openForm_insert() {
    document.getElementById("new_row_form").style.display = "block";
}

function closeForm_insert() {
    document.getElementById("new_row_form").style.display = "none";
}

function closeForm_update() {
    document.querySelector(".updateRecordForm").style.display = "none";
}

// Update row function

function updateRecord() {
    let new_name = document.querySelector("#new_name").value;
    console.log("Record Updated. Id: ", id);
    console.log("Name: ", new_name);
    const formData = new FormData();
    formData.append('id', id);
    formData.append('name', new_name);

    fetch('./app/family/update.php', {
            method: 'POST',
            header: {
                'Content-Type': 'application/json'
            },
            body: formData
        })
        .then(response => response.json()
            .then(data => {
                console.log(data);
            })
            .catch((error) => {
                console.error('Error: ', error);
            }));
}

function deleteRecord(e) {
    let id = e.target.getAttribute('data-val');
    console.log("Record Deleted: ", e.target.getAttribute('data-val'));
    const formData = new FormData();
    formData.append('id', id);

    fetch('./app/family/delete.php', {
            method: 'POST',
            header: {
                'Content-Type': 'application/json'
            },
            body: formData
        })
        .then(response => response.json()
            .then(data => {
                console.log(data);
                reloadTable();
            })
            .catch((error) => {
                console.error('Error: ', error);
            }));
}


// Delete All record function


function deleteAllRecord() {
    if (confirm("Are you sure? You will delete all the records!")) {
        fetch('./app/family/deleteAll.php', {
                method: 'POST',
                header: {
                    'Content-Type': 'application/json'
                },
            })
            .then(response => response.json()
                .then(data => {
                    console.log(data);
                    reloadTable();
                })
                .catch((error) => {
                    console.error('Error: ', error);
                }));
    }
}

function reloadTable() {
    let table = document.querySelector(".table");
    tableContainer.removeChild(table);
    tableGenerator();
}