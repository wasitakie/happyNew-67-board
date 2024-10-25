<?php
session_start();
include '../session/admin.php';
include '../config/connect.php';
include '../components/layoutHead.php';
?>
<div class="container">
    <div class="col-md-12">
        <div class="logoIndex items-center content-center">
            <img src="../images/Untitled-1.jpg" alt="" srcset="" class="m-auto">
        </div>
        <hr>
        <div class="detail mt-2">
            <div class="addCompany text-xl my-3" data-modal-target="crud-modal" data-modal-toggle="crud-modal">
                เพิ่มบริษัทใหม่</div>
            <div class="tableBox">


                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center" style="width: 5%;">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ชื่อบริษัทใหม่
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    รหัสบริษัทใหม่
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Sector
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    จำนวนวผู้ตอบ
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Excel
                                </th>
                                <th scope="col" class="px-6 py-3 text-center" style="width: 15%;">
                                    ปิด/เปิด
                                </th>
                                <th scope="col" class="px-6 py-3 text-center" style="width: 10%;">
                                    แก้ไข
                                </th>
                                <th scope="col" class="px-6 py-3 text-center" style="width: 10%;">
                                    ลบ
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'myClass.php';
                            $myClass = new MyClass();
                            $se = $con->prepare(" SELECT* FROM company ORDER BY cp_id DESC");
                            $se->execute();
                            $n = 1;
                            while ($r = $se->fetch(PDO::FETCH_ASSOC)) {

                                if ($r["cp_status"] == 1) {
                                    $status = 0;
                                    $statusCheck = "checked";
                                } elseif ($r["cp_status"] == 0) {
                                    $status = 1;
                                    $statusCheck = "";
                                }
                            ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                        <?= $n; ?>.
                                    </th>
                                    <td class="px-6 py-4">
                                        <?= $r["cp_name"] ?>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <?= $r["cp_code"] ?>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <?= $r["cp_sector"] ?>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <?= $myClass->countGroups($r["cp_code"]); ?>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="excel.php?id=<?= $r["cp_code"]; ?>" target="_blank">Excel <i
                                                class="bi bi-printer"></i></a>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <label class="inline-flex items-center me-5 cursor-pointer text-center">
                                            <input type="checkbox" value="" class="sr-only peer openCompany"
                                                <?= $statusCheck; ?> data-id="<?= $status; ?>"
                                                data-id1="<?= $r["cp_id"]; ?>">
                                            <span
                                                class="me-1 text-sm font-medium text-gray-900 dark:text-gray-300">ปิด</span>
                                            <div
                                                class="relative w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
                                            </div>
                                            <span
                                                class="ms-1 text-sm font-medium text-gray-900 dark:text-gray-300">เปิด</span>
                                        </label>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <button type="button"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-xs px-3 py-2 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 companyEdit"
                                            data-id2="<?= $r["cp_id"]; ?>" data-modal-target="crud-modal-edit"
                                            data-modal-toggle="crud-modal-edit"><i class="bi bi-pencil-square"></i>
                                            แก้ไข</button>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="insertData.php?g=delete&id=<?= $r["cp_id"]; ?>" type="button"
                                            class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-xs px-3 py-2 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                            onclick="return confirm('ยืนยันการลบข้อมูลนี้อืกครั้ง!');"><i
                                                class="bi bi-trash3-fill"></i> ลบ</a>
                                    </td>
                                </tr>
                            <?php
                                $n++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>




<?php
include 'modelStatus.php';
include 'modelStatusEdit.php';
?>



<script>
    $(document).ready(function() {

        $(".openCompany").change(function(e) {
            e.preventDefault();
            let dataUp = $(this).attr("data-id");
            let idUp = $(this).attr("data-id1");
            let url = "insertData.php?g=upStatus";

            $.post(url, {
                dataUp: dataUp,
                idUp: idUp
            }, function(data) {
                window.location.reload();
            });
        });

        $(".companyEdit").click(function() {
            let idUpData = $(this).attr("data-id2");
            let url = "editForm.php";

            $.post(url, {
                idUpData: idUpData
            }, function(data) {
                $(".showEdit").html(data);
            });
        })

    });
</script>
<?php
include '../components/layoutFooter.php';
?>