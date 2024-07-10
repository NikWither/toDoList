const addTaskField = document.querySelector('.addTask__tasks');
const btnAddTask = document.querySelector('.addTask__add-btn');
const searchTaskField = document.querySelector('.search__input');

btnAddTask.addEventListener("click", (event) => { 
    if (addTaskField.value === "") {
        alert('Введите задачу');
        event.preventDefault();
    }
})

window.onload = () => {
    document.querySelector('.search__input').oninput = function() {
        let value = this.value.trim().toLowerCase();
        let tasks = document.querySelectorAll('.task__title h3');
        console.log(value);
        
        tasks.forEach((task) => {
            const finder = task.innerText.toLowerCase();

            if (finder.indexOf(value) != -1) {
                task.closest('.task').style.display = "block";
            } else {
                task.closest('.task').style.display = "none";
            }
        })
    }
}

const addFavourite = document.querySelector('.btn__favourite');

addFavourite.addEventListener("click", () => {
    console.log("sadasd")
});