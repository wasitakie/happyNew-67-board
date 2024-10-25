<?php
session_start();
include '../session/admin.php';
include '../config/connect.php';
$id = $_POST["idUpData"];
$se = $con->prepare(" SELECT* FROM company WHERE cp_id = ? ");
$se->execute([$id]);
$r = $se->fetch(PDO::FETCH_ASSOC);
?>

<form class="p-4 md:p-5" method="post" action="insertData.php?g=editForm">
    <div class="grid gap-4 mb-4 grid-cols-2">
        <div class="col-span-2">
            <label for="name"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ชื่อบริษัทใหม่</label>
            <input type="text" name="name" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="" value="<?= $r["cp_name"]; ?>">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <label for="code"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">รหัสบริษัทใหม่</label>
            <input type="text" name="code" id="code"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="" value="<?= $r["cp_code"]; ?>">
        </div>
        <div class="col-span-2 sm:col-span-1">
            <label for="sector" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sector</label>
            <input type="text" name="sector" id="sector"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required="" value="<?= $r["cp_sector"]; ?>">
        </div>

    </div>
    <input type="hidden" name="upDate" value="<?= $id; ?>">
    <button type="submit"
        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd"></path>
        </svg>
        Save
    </button>
</form>