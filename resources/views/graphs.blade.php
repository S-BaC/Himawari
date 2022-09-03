<div class="
    m-auto
    md:flex md:justify-evenly md:m-10
    graphs">

    <div class="pie-graph">

        <!-- Add 2 buttons -->

        <!-- Create a div where the graph will take place -->
        <h3 id="pie-emp-title" class="mb-5 font-semibold"></h3>
        <div id="pieChartEmp"></div>
        <div class="flex gap-3 mt-5">
            <button onclick="update(dept_data, 'Departments')">By Department</button>
            <button onclick="update(role_data, 'Roles')">By Role</button>
        </div>
    </div>

    <div class="bar-graph z-20">
        <svg id="barChartApp" class="w-96 h-96"></svg>
    </div>

    <rect class="bar" fill="#000" width="54" height="133.33333333333331" x="8" y="66.66666666666669"></rect>



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
