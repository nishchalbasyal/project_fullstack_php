$(document).ready(function () {
  loadTasks();
});

const inputElement = document.getElementById("input_task");
const taskHolder = document.getElementById("task_holder");

function loadTasks() {
  $.ajax({
    url: "/assiagnment/data/api/task.php",
    method: "GET",
    dataType: "json",
    success: function (tasks) {
      $("#task_holder").empty();
      $.each(tasks, function (index, task) {
        $("#task_holder").append(`
            <div class="task" draggable="true" id="task-${task.t_id}">
              <span class="task-text">
                <input type="checkbox" name="completed-task" id="task${task.t_id}_checkbox" class="checkbox"  onChange="updateTaskStatus(${task.t_id},${task.t_status})" value="${task.t_status}">
                <label for="task-${task.t_id}">${task.t_name}</label><br>
              </span>
              <span class="button">
                <button onClick="handleDelete(${task.t_id})">
                  <i class="fa fa-times" aria-hidden="true"></i>
                  Delete
                </button>
              </span>
            </div>
          `);
      });
    },

    error: function (xhr, status, error) {
      console.error("Error loading tasks:", error);
    },
  });
}

async function createNewtask() {
  const { data } = await axios.post(
    "/assiagnment/data/api/task.php/",
    {
      t_name: inputElement.value.toString(),
      t_status: false,
      t_details: "",
    },
    {
      headers: {
        "Content-Type": "application/json",
      },
    }
  );
  loadTasks();
  console.log(data);
}
async function updateTaskStatus(id, t_status) {
  const { data } = await axios.put(
    `/assiagnment/data/api/task.php/?id=${id}`,
    {
      t_status: !t_status,
    },
    {
      headers: {
        "Content-Type": "application/json",
      },
    }
  );
  loadTasks();
  console.log(data);
}

async function handleDelete(id) {
  console.log("delete btn clicked");
  const { data } = await axios.delete(
    `/assiagnment/data/api/task.php/?id=${id}`
  );
  console.log(data);
  loadTasks();
}
