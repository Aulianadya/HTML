let tasks = [];
const inputBox = document.getElementById("taskInput");
const todoList = document.getElementById("todo-list")

const addTask = () => {
    if (inputBox.value === ""){
        alert("please enter text")
    } else {
        const listItem = document.createElement('li');
        listItem.innerHTML = inputBox.value;
        todoList.appendChild(listItem)
        let createSpan = document.createElement('span')
        createSpan.innerHTML = "Delete"
        // createSpan.setAttribute("id", "hapusTodo")
        listItem.appendChild(createSpan)
        // let createUpdate = document.createElement('span')
        // createUpdate.innerHTML = "Update"
        // createUpdate.setAttribute("id", "updateSpan")
        // listItem.appendChild(createUpdate)
    }
    inputBox.value = "";
}

function updateList(){

}

todoList.addEventListener(("click"), function(e) {
    if(e.target.tagName === "LI") {
        e.target.classList.toggle("checked")
    } else if (e.target.tagName === "SPAN") {
        const userConfirmation = confirm(`Are You Sure Wanna Delete The Task?`)
        if(userConfirmation == true){
            e.target.parentElement.remove()
        }
    }
}, false)

const updateTasksList = () => {
    // // const todoList = document.getElementById('task-list');
    // todoList.innerHTML = '';

    // tasks.forEach((task, index) => {
    //     const listItem = document.createElement('li');

    //     listItem.innerHTML = `
    //     <div class="taskItem">
    //         <div class="task ${task.completed ? 'completed' : ''}">
    //             <input type="checkbox" class="checkbox" ${task.completed ? "checked" : ""}>
    //             <p>${task.text}</p>
    //         </div>
    //         <div class="icons">
    //             <img src="edit.png" onClick="editTask(${index})">
    //             <img src="bin.png" onClick="deleteTask(${index})">
    //         </div>
    //     </div>
    //     `;

    //     listItem.querySelector('input[type="checkbox"]').addEventListener('change', () => toggleTaskComplete(index));
    //     todoList.append(listItem);
    // });
};