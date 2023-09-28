const inputAddToDo = document.querySelector(".input_add-to-do");
const svgAddToDo = document.querySelector(".svg_add-to-do");
const taskList = document.querySelector(".task-list")

const CHECK = "fa-check-circle";
const UNCHECK = "fa-circle-thin";
const LINE_THROUGH = "lineThrough";

inputAddToDo.addEventListener("keyup", (event) => {
    // keycode = 13: vérifie si l'utilisateur appuie sur entrer
    if ( event.keyCode === 13) {
        let taskName = inputAddToDo.value
        
        let task = `<li class="task">
                        <p class="text">${taskName}</p>
                    </li>`;
    
        taskList.insertAdjacentHTML('beforeend', task);

        inputAddToDo.value = "";
    }
})

svgAddToDo.addEventListener("click", () => {
    let taskName = inputAddToDo.value
        
    let task = `<li class="task">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/></svg>
                    <p class="text">${taskName}</p>
                </li>`;

    taskList.insertAdjacentHTML('beforeend', task);

    inputAddToDo.value = "";
})