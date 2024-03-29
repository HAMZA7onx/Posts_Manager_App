<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- component -->
<!DOCTYPE html>


    <!-- main content -->
    <main class="h-screen w-full absolute top-[90px] ">
        <!-- left sidebar -->
        <aside id="sidebar "
            class="w-[60px] lg:w-[240px] h-[calc(100vh-120px)] whitespace-nowrap fixed shadow overflow-x-hidden transition-all duration-500 ease-in-out">
            <div class="flex flex-col justify-between h-full border border-blue-500 border-solid">
                <ul class="flex flex-col gap-1 mt-2">

                    <li class="text-blue-500 hover:bg-blue-100 hover:text-blue-500">
                        <a class="w-full flex items-center py-3" href="<?php echo URLROOT . '/manageCategories/index'; ?>">
                            <i class="fa-solid fa-folder text-center px-5"></i>
                            <span class="whitespace-nowrap pl-1">Manage Categories</span>
                        </a>
                    </li>

                    <li class="text-blue-500 hover:bg-blue-100 hover:text-blue-500">
                        <a class="w-full flex items-center py-3" href="<?php echo URLROOT . '/manageTags/index'; ?>">
                            <i class="fa-solid fa-tag text-center px-5"></i>
                            <span class="whitespace-nowrap pl-1">Manage Tags</span>
                        </a>
                    </li>

                    <li class="text-blue-500 hover:bg-blue-100 hover:text-blue-500">
                        <a class="w-full flex items-center py-3" href="<?php echo URLROOT . '/archive/index'; ?>">
                            <i class="fa-solid fa-archive text-center px-5"></i>
                            <span class="whitespace-nowrap pl-1">Archive Wikies</span>
                        </a>
                    </li>
                </ul>

            </div>
        </aside>

        <!-- main content -->
        <section id="CHARTS"
            class="w-[100wh-60px] lg:w-[100wh-250px] ml-[60px] lg:ml-[240px] p-5 right-0 transition-all duration-500 ease-in-out">
            <!-- user summary -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
                <div class="bg-slate-50 p-5 m-2 rounded-md flex justify-between items-center shadow border border-blue-500 border-solid">
                    <div>
                        <h3 class="font-bold">Total Users</h3>
                        <p id="total-users" class="text-gray-500">100</p>
                    </div>
                    <i class="fa-solid fa-users p-4 bg-gray-200 rounded-md"></i>
                </div>

                <div class="bg-slate-50 p-5 m-2 flex justify-between items-center shadow border border-blue-500 border-solid rounded-md">
                    <div>
                        <h3 class="font-bold">Total Wikis</h3>
                        <p id="total-wikies" class="text-gray-500">65</p>
                    </div>
                    <i class="fa-solid fa-file-alt p-4 bg-green-200 rounded-md"></i>

                </div>

                <div class="bg-slate-50 p-5 m-2 flex justify-between items-center shadow border border-blue-500 border-solid rounded-md">
                    <div>
                        <h3 class="font-bold">Users with more 30 wikis</h3>
                        <p id="more-30" class="text-gray-500">30</p>
                    </div>
                    <i class="fa-solid fa-chart-bar p-4 bg-orange-200 rounded-md"></i>

                </div>

                <div class="bg-slate-50 p-5 m-2 flex justify-between items-center shadow border border-blue-500 border-solid rounded-md">
                    <div>
                        <h3 class="font-bold">Archived Posts</h3>
                        <p id="archived-posts" class="text-gray-500">5</p>
                    </div>
                    <i class="fa-solid fa-archive p-4 bg-red-200 rounded-md"></i>

                </div>
            </div>

            <div class="grid grid-cols-1 gap-2 ">
                <!-- chart  -->
                <div class="m-2 shadow-md border border-solid">
                    <!-- <div id="chart" class="w-full "></div> -->
                    <div id="CHART1" class="w-full h-[500px]"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
                <!-- chart  -->
                <div class="m-2 lg:col-span-1 shadow-md border-2 border-solid">
                    <!-- <div id="pie_chart" class="w-full"></div> -->
                    <div id="CHART2" class="w-full h-[500px]"></div>
                </div>

                <!-- candle list -->
                <div class="m-2 lg:col-span-2 shadow-md border-2 border-solid">
                    <!-- <div id="candle_chart" class="w-full"></div> -->
                    <div id="CHART3" class="w-full h-[500px]"></div>
                </div>
            </div>

        </section>
    </main>

  

<?php require APPROOT . '/views/inc/footer.php'; ?>