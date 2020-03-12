


<figure class="highcharts-figure">
    <div id="container"></div>

</figure>
<script>
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Graphics Keuangan Roketin'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Graphics '
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} jt</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Pengeluaran Tahun 2020',
        data: [1.9, 1.5, 1.4, 2.2, 1.0, 2.3, 1.6, 1.8, 1.9, 1.1, 4.6, 4.4]



    }]
});</script>
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="ion ion-clipboard mr-5"></i>
                    List Pengeluaran Tahun 2020
                  </h3>

             
                <!-- /.card-header -->
                <div class="card-body">
                  <ul class="todo-list" data-widget="todo-list">
                    <li>
                      <!-- drag handle -->
                      <span class="handle">
                      
                      </span>
                      <!-- checkbox -->
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                        <label for="todoCheck1"></label>
                      </div>
                      <!-- todo text -->
                      <span class="text">Beli Spidol 1 kardus</span>
                      <!-- Emphasis label -->
                      <small class="badge badge-info"><i class="far fa-clock"></i> 03-02-2020</small>
                      <!-- General tools such as edit or delete-->
                      <div class="tools">
                       
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                      
                      </span>
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                        <label for="todoCheck2"></label>
                      </div>
                      <span class="text">Beli Buku 1 Kardus</span>
                      <small class="badge badge-info"><i class="far fa-clock"></i> 02-02-2020</small>
                      <div class="tools">
                       
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                      
                      </span>
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo3" id="todoCheck3">
                        <label for="todoCheck3"></label>
                      </div>
                      <span class="text">Beli Kursi + Meja 3 Buah</span>
                      <small class="badge badge-info"><i class="far fa-clock"></i>01-02-2020</small>
                      <div class="tools">
                       
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                      
                      </span>
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo4" id="todoCheck4">
                        <label for="todoCheck4"></label>
                      </div>
                      <span class="text">Beli Gelas + Piring</span>
                      <small class="badge badge-info"><i class="far fa-clock"></i> 04-02-2020</small>
                      <div class="tools">
                       
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                      
                      </span>
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo5" id="todoCheck5">
                        <label for="todoCheck5"></label>
                      </div>
                      <span class="text">Bayar Wifi</span>
                      <small class="badge badge-info"><i class="far fa-clock"></i> 1 week</small>
                      <div class="tools">
                       
                        <i class="fas fa-trash-o"></i>
                      </div>
                      <span class="handle">
                      <li>
                      </span>
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo4" id="todoCheck4">
                        <label for="todoCheck4"></label>
                      </div>
                      <span class="text">Beli Gelas + Piring</span>
                      <small class="badge badge-info"><i class="far fa-clock"></i> 04-02-2020</small>
                      <div class="tools">
                       
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                      
                      </span>
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo5" id="todoCheck5">
                        <label for="todoCheck5"></label>
                      </div>
                      <span class="text">Bayar Wifi</span>
                      <small class="badge badge-info"><i class="far fa-clock"></i> 1 week</small>
                      <div class="tools">
                       
                        <i class="fas fa-trash-o"></i>
                      </div>
        <div class="card-tools">
                    <ul class="pagination pagination-sm">
                      <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                      <li class="page-item"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item"><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                    </ul>
                  </div>
                </div> 
         
                  </div>
                </div>
                    </li>                  
                        </div>
                      </div>
                    </td>
            </div>
          </div>
        </div>
      </div>
	<br/>
	<br/>