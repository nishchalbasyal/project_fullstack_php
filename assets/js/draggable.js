document.addEventListener("DOMContentLoaded", () => {
  const taskLists = document.querySelectorAll(".task");
  const taskcontainer = document.querySelector(".task-holder"); // Updated class name

  let selected = null;``

  taskLists.forEach((task) => {
    task.addEventListener("dragstart", function (e) {
      selected = task;
      selected.classList.add("dragging");
    });

    task.addEventListener("dragend", function (e) {
      if (selected) {
        selected.classList.remove("dragging");
        selected = null;
      }
    });
  });

  taskcontainer.addEventListener("dragover", function (e) {
    e.preventDefault();
  });

  taskcontainer.addEventListener("dragenter", function (e) {
    e.preventDefault();
  });

  taskcontainer.addEventListener("drop", function (e) {
    e.preventDefault();

    if (selected) {
      const targetTask = e.target.closest(".task");

      if (targetTask) {
        taskcontainer.insertBefore(selected, targetTask);
      } else {
        taskcontainer.appendChild(selected);
      }
      selected.classList.remove("dragging");
      selected = null;
    }
  });
});
