<?php
/*
Template Name:فرم ثبت نام
*/
?>


<form method="post" action="">
    <label for="first_name">نام:</label>
    <input type="text" id="first_name"name="first_name" required><br>
    <label form="last_name">نام خانوادگی:</label>
    <input type="text"id="last_name" name="last_name"required><br>
    <label for="role">نقش:</label>
    <select id="role" name="role"required>
        <option value="مدیر"> مدیر</option>
        <option value="معاون">معاون</option>
        <option value="معلم">معلم</option>
</select><br>
<label for="password">پسورد:</label>
<input type="password"id="password"name="password"required><br>
<input type="submit"name="submit"value="ثبت نام">
</form>










