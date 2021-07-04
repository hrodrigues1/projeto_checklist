const button = document.querySelector(".checklist_button");
const inputText = document.getElementById("taskInputText");
const container = document.querySelector(".container");
const timeline = document.querySelector(".timeline");
let dragging;


inputText.addEventListener("keypress", function (event) {
  if (event.charCode === 13) {
    add();
  }
})

button.addEventListener("click", add);

function add() {
  if (!inputText.value.trim()) {
    inputText.focus();
    return false;
  }

  const newTask = document.createElement("div");
  newTask.className = "checklist__new-task";

  const task = document.createElement("p");
  task.className = "checklist__new-task_name";
  task.innerHTML = inputText.value;

  const remove = document.createElement("div");
  remove.className = "checklist__new-task_remove";
  remove.innerHTML = `<button class="checklist__new-task_remove-button">x</button>`

  task.style.width = "80%";
  task.style.wordWrap = "break-word";

  newTask.appendChild(task);
  newTask.appendChild(remove);
  timeline.appendChild(newTask);

  inputText.value = "";

  task.addEventListener("click", function (event) {
    event.preventDefault();
    if (this.classList.contains("checklist__new-task_name")) {
      this.classList.remove("checklist__new-task_name");
      this.classList.add("checklist__new-task_hidden");
    } else {
      this.classList.remove("checklist__new-task_hidden");
      this.classList.add("checklist__new-task_name");
    }
  })

  remove.addEventListener("click", function () {
    newTask.remove();
  })

  newTask.setAttribute("draggable", true);

  
  newTask.addEventListener("dragstart", dragStart);


  newTask.addEventListener('dragover', dragOver);


  newTask.addEventListener("dragend", dragEnd);

  function dragStart(event) {
    dragging = event.target.closest(".checklist__new-task");
  }

  function dragOver(event) {
    const location = event.target.closest(".checklist__new-task");//
    console.log(dragging);
    this.parentNode.insertBefore(dragging, location);
  }
  function dragEnd() {
    dragging = null;
  }
};

const buttons = document.createElement("div");
const buttonCheck = document.createElement("button");
const buttonClear = document.createElement("button");

buttons.className = "buttons";
buttonCheck.className = "checklist_buttons";
buttonClear.className = "checklist_buttons";

buttonCheck.innerHTML = "Finalizar Todos";
buttonClear.innerHTML = "Limpar Todos";

buttons.appendChild(buttonCheck);
buttons.appendChild(buttonClear);
container.insertBefore(buttons, container.childNodes[container.length]);

buttonCheck.addEventListener("click", function () {
  const tasks = document.querySelectorAll("p");
  this.classList.toggle("activo");

  if (this.classList.contains("activo")) {
    this.innerHTML = "Desmarcar Todos";
    for (let i = 0; i < tasks.length; i++) {

      if (tasks[i].classList.contains("checklist__new-task_name")) {
        tasks[i].classList.remove("checklist__new-task_name");
        tasks[i].classList.add("checklist__new-task_hidden");
      }
    }
  } else {
    this.innerHTML = "Finalizar Todos"
    for (let i = 0; i < tasks.length; i++) {

      if (tasks[i].classList.contains("checklist__new-task_hidden")) {
        tasks[i].classList.remove("checklist__new-task_hidden");
        tasks[i].classList.add("checklist__new-task_name");
      }
    }
  }
})

buttonClear.addEventListener("click", function () {
  const toDoListNewTask = document.querySelectorAll(".checklist__new-task");
  for (let i = 0; i < toDoListNewTask.length; i++) {
    toDoListNewTask[i].remove();
  }
})

