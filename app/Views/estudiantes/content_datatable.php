<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- Datatable -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"><div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Lista de los estudiantes</h3>
    </div>

    <div class="card-body table-responsive">
      <table id="table_id" class="table shadow">
        <!-- <thead>
          <tr>
          <th>Nombre</td>
          <th>Pais</th>
      </thead>
      <tbody>
          <tr>
              <td>JUan Perez</td>
              <td>Argentina</td>
          </tr>
          <tr>
              <td>Maria Pia</td>
              <td>Venezuela</td>
          </tr>
          <tr>
              <td>Juan Carlos</td>
              <td>Peru</td>
          </tr>
          <tr>
              <td>Juan Perez 1</td>
              <td>Argentina 1</td>
          </tr>
          <tr>
              <td>Maria Pia 1</td>
              <td>Venezuela 1</td>
          </tr>
          <tr>
              <td>Almendra Suarez 1</td>
              <td>Peru 1</td>
          </tr>
          <tr>
              <td>Juan Perez 2</td>
              <td>Argentina 2</td>
          </tr>
          <tr>
              <td>Maria Pia 2</td>
              <td>Venezuela 2</td>
          </tr>
          <tr>
              <td>Almendra Suarez 2</td>
              <td>Peru 2</td>
          </tr>
          <tr>
              <td>Juan Perez 3</td>
              <td>Argentina 3</td>
          </tr>
          <tr>
              <td>Maria Pia 3</td>
              <td>Venezuela 3</td>
          </tr>
          <tr>
              <td>Almendra Suarez 3</td>
              <td>Peru 3</td>
          </tr>
          <tr>
              <td>Juan Perez 4</td>
              <td>Argentina 4</td>
          </tr>
          <tr>
              <td>Maria Pia 4</td>
              <td>Venezuela 4</td>
          </tr>
          <tr>
              <td>Almendra Suarez 4</td>
              <td>Peru 4</td>
          </tr>
          <tr>
              <td>Juan Perez 5</td>
              <td>Argentina 5</td>
          </tr>
          <tr>
              <td>Maria Pia 5</td>
              <td>Venezuela 5</td>
          </tr>
          <tr>
              <td>Almendra Suarez 5</td>
              <td>Peru 5</td>
          </tr>
          <tr>
              <td>Juan Perez 6</td>
              <td>Argentina 6</td>
          </tr>
          <tr>
              <td>Maria Pia 6</td>
              <td>Venezuela 6</td>
          </tr>
          <tr>
              <td>Almendra Suarez 6</td>
              <td>Peru 6</td>
          </tr>
          <tr>
              <td>Juan Perez 7</td>
              <td>Argentina 7</td>
          </tr>
          <tr>
              <td>Maria Pia 7</td>
              <td>Venezuela 7</td>
          </tr>
          <tr>
              <td>Almendra Suarez 7</td>
              <td>Peru 7</td>
          </tr>
          <tr>
              <td>Juan Perez 8</td>
              <td>Argentina 8</td>
          </tr>
          <tr>
              <td>Maria Pia 8</td>
              <td>Venezuela 8</td>
          </tr>
          <tr>
              <td>Almendra Suarez 8</td>
              <td>Peru 8</td>
          </tr>
          <tr>
              <td>Juan Perez 9</td>
              <td>Argentina 9</td>
          </tr>
          <tr>
              <td>Maria Pia 9</td>
              <td>Venezuela 9</td>
          </tr>
          <tr>
              <td>Almendra Suarez 9</td>
              <td>Peru 9</td>
          </tr>
          <tr>
              <td>Juan Perez 10</td>
              <td>Argentina 10</td>
          </tr>
          <tr>
              <td>Maria Pia 10</td>
              <td>Venezuela 10</td>
          </tr>
          <tr>
              <td>Almendra Suarez 10</td>
              <td>Peru 10</td>
          </tr>
          <tr>
              <td>JUan Perez</td>
              <td>Argentina</td>
          </tr>
          <tr>
              <td>Maria Pia</td>
              <td>Venezuela</td>
          </tr>
          <tr>
              <td>Juan Carlos</td>
              <td>Peru</td>
          </tr>
          <tr>
              <td>Juan Perez 1</td>
              <td>Argentina 1</td>
          </tr>
          <tr>
              <td>Maria Pia 1</td>
              <td>Venezuela 1</td>
          </tr>
          <tr>
              <td>Almendra Suarez 1</td>
              <td>Peru 1</td>
          </tr>
          <tr>
              <td>Juan Perez 2</td>
              <td>Argentina 2</td>
          </tr>
          <tr>
              <td>Maria Pia 2</td>
              <td>Venezuela 2</td>
          </tr>
          <tr>
              <td>Almendra Suarez 2</td>
              <td>Peru 2</td>
          </tr>
          <tr>
              <td>Juan Perez 3</td>
              <td>Argentina 3</td>
          </tr>
          <tr>
              <td>Maria Pia 3</td>
              <td>Venezuela 3</td>
          </tr>
          <tr>
              <td>Almendra Suarez 3</td>
              <td>Peru 3</td>
          </tr>
          <tr>
              <td>Juan Perez 4</td>
              <td>Argentina 4</td>
          </tr>
          <tr>
              <td>Maria Pia 4</td>
              <td>Venezuela 4</td>
          </tr>
          <tr>
              <td>Almendra Suarez 4</td>
              <td>Peru 4</td>
          </tr>
          <tr>
              <td>Juan Perez 5</td>
              <td>Argentina 5</td>
          </tr>
          <tr>
              <td>Maria Pia 5</td>
              <td>Venezuela 5</td>
          </tr>
          <tr>
              <td>Almendra Suarez 5</td>
              <td>Peru 5</td>
          </tr>
          <tr>
              <td>Juan Perez 6</td>
              <td>Argentina 6</td>
          </tr>
          <tr>
              <td>Maria Pia 6</td>
              <td>Venezuela 6</td>
          </tr>
          <tr>
              <td>Almendra Suarez 6</td>
              <td>Peru 6</td>
          </tr>
          <tr>
              <td>Juan Perez 7</td>
              <td>Argentina 7</td>
          </tr>
          <tr>
              <td>Maria Pia 7</td>
              <td>Venezuela 7</td>
          </tr>
          <tr>
              <td>Almendra Suarez 7</td>
              <td>Peru 7</td>
          </tr>
          <tr>
              <td>Juan Perez 8</td>
              <td>Argentina 8</td>
          </tr>
          <tr>
              <td>Maria Pia 8</td>
              <td>Venezuela 8</td>
          </tr>
          <tr>
              <td>Almendra Suarez 8</td>
              <td>Peru 8</td>
          </tr>
          <tr>
              <td>Juan Perez 9</td>
              <td>Argentina 9</td>
          </tr>
          <tr>
              <td>Maria Pia 9</td>
              <td>Venezuela 9</td>
          </tr>
          <tr>
              <td>Almendra Suarez 9</td>
              <td>Peru 9</td>
          </tr>
          <tr>
              <td>Juan Perez 10</td>
              <td>Argentina 10</td>
          </tr>
          <tr>
              <td>Maria Pia 10</td>
              <td>Venezuela 10</td>
          </tr>
          <tr>
              <td>Almendra Suarez 10</td>
              <td>Peru 10</td>
          </tr>
              </tbody> -->
        <thead>
          <tr>
            <th>name</th>
            <th>position</th>
            <th>salary</th>
            <!-- <th>start_date</th> -->
            <th>office</th>
            <!-- <th>extn</th> -->
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>
<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<!-- Datatable -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {

        var data = [
            [
                "Tiger Nixon",
                "System Architect",
                "$3,120",
                "2011/04/25",
                "Edinburgh",
                "5421"
            ],
            [
                "Garrett Winters",
                "Director",
                "$5,300",
                "2011/07/25",
                "Edinburgh",
                "8422"
            ]
        ];
        var data2 = [
            {
                "name":       "Tiger Nixon",
                "position":   "System Architect",
                "salary":     "$3,120",
                "start_date": "2011/04/25",
                "office":     "Edinburgh",
                "extn":       "5421"
            },
            {
                "name":       "Garrett Winters",
                "position":   "Director",
                "salary":     "$5,300",
                "start_date": "2011/07/25",
                "office":     "Edinburgh",
                "extn":       "8422"
            }
        ];
        // $('#table_id').DataTable();
        $('#table_id').DataTable( {
            data: data2,
            columns: [
                {data: 'name'},
                {data: 'position'},
                {data: 'salary'},
                // {data: 'start_date'},
                {data: 'office'},
                // {data: 'extn'}
            ]
        } );
        // function Employee (name, position, salary, office){
        //     this.name = name;
        //     this.position = position;
        //     this.salary = salary;
        //     this._office = office;

        //     this.office = function(){
        //         return this._office;
        //     }
        // }
    } );
</script>