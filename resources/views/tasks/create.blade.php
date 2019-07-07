<?php
?>
<html>
<form action="{{ route('tasks.store') }}" method="post">
    {{ csrf_field() }}
    <label>Task Type:</label>
    <input type="text" name="task_type">
    <br><br>
    <label>Task name:</label>
    <br>
    <input type="text" name="name">
    <br><br>
    <label>Task description:</label>
    <br>
    <textarea name="description"></textarea>
    <br><br>
    <label>Task Date:</label>
    <br>
    <input type="date" name="task_date" class="date" />
    <br><br>
    <label>Task Time:</label>
    <br>
    <input type="time" name="task_time" class="time">
    <br><br>
    <input type="submit" value="Save" />
</form>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>
</html>
