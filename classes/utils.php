<?php
class utils
{
    public static function is_active($value, $type = "badge")
    {
        if ($type == "badge") {
            echo ($value) ? "Active" : "Inactive";
        } else if ($type == "select") {
            echo ($value) ? "<option value='1' selected>Active</option><option value='0'>Inactive</option>" : "<option value='1'>Active</option><option value='0' selected>Inactive</option>";
        }
    }
}
