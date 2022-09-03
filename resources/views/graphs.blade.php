<div class="
    m-auto
    flex flex-col mb-5
    md:mb-0 md:flex-row md:justify-evenly md:m-10

    graphs">

    <div class="pie-graph">

        <!-- Add 2 buttons -->

        <!-- Create a div where the graph will take place -->
        <h3 id="pie-emp-title" class="mb-1 font-semibold flex items-center">
            Employees: 
            <select name="" id="pieChartCat" class="w-36 border-none bg-special-05" 
            onchange="
                let cat = document.getElementById('pieChartCat').value;
                update(data[cat], cat)">
                <option value="Roles">
                    By Roles
                </option>
                <option value="Departments">
                    By Departments
                </option>
            </select>
        </h3>
        <div id="pieChartEmp"></div>
    </div>

    <div class="bar-graph flex flex-col items-center hidden md:flex">
        <h3 id="bar-app-title" class=" font-semibold">
            Appointments by Day
        </h3>
        <svg id="barChartApp" class="w-full h-full"></svg>
    </div>




    {{-- <img class="w-3/4 m-auto md:w-1/4" src="{{URL::asset('/img/dummy/graph2.png')}}" alt="">
    <img class="w-3/4 m-auto md:w-1/4" src="{{URL::asset('/img/dummy/graph3.png')}}" alt=""> --}}

    <!-- Load d3.js -->
    <script src="https://d3js.org/d3.v4.js"></script>

    <!-- Color scale -->
    <script src="https://d3js.org/d3-scale-chromatic.v1.min.js"></script>

    <!-- Custom Script   -->
    <script>
        let emp_by_dept = <?= json_encode($data['emp_by_department']) ?>;
        let emp_by_role = <?= json_encode($data['emp_by_role']) ?>;
        let app_by_date = <?= json_encode($data['appointments']) ?>;
    </script>
    <script src="{{ URL::asset('/js/graphs_pie.js') }}"></script>
    <script src="{{ URL::asset('/js/graphs_bar.js') }}"></script>
</div>
