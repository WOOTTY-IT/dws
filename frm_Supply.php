<div class="container">
  <nav class="navbar navbar-light bg-faded rounded navbar-toggleable-md">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#containerNavbar" aria-controls="containerNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>

    <div class="collapse navbar-collapse" id="containerNavbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <nav class="navbar navbar-light bg-faded rounded navbar-toggleable-md">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#containerNavbarCenter" aria-controls="containerNavbarCenter" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="containerNavbarCenter">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">บันทึกผู้ใช้งานระบบ<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown05">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="jumbotron">
    <div class="col-sm-8 mx-auto">
      <h1>ทำรายการจ่ายวัสดุ</h1>
      <form>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputEmail4">รหัสใบเบิก</label>
            <input type="email" class="form-control" id="inputEmail4" readonly disabled placeholder="รหัสใบเบิก">
          </div>
          <div class="form-group col-md-4">
            <label for="inputAddress">วันที่เบิก</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="">
          </div> 
          <div class="form-group col-md-5">
            <label for="inputEmail4">หน่วยที่เบิก</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>แผนก 1</option>
              <option>แผนก 2</option>
              <option>แผนก 3</option>
              <option>แผนก 4</option>
              <option>แผนก 5</option>
            </select>
          </div>
        </div>

      </form>

      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">รายการ</th>
              <th scope="col">หน่วยนับ</th>
              <th scope="col">คงเหลือ</th>
              <th scope="col">จำนวนเบิก</th>
              <th scope="col">จำนวนจ่าย</th>
            </tr>
          </thead>
          <tbody>
            <!-- On rows -->
            <tr class="table-active">...</tr>

            <tr class="table-primary">...</tr>
            <tr class="table-secondary">...</tr>
            <tr class="table-success">...</tr>
            <tr class="table-danger">...</tr>
            <tr class="table-warning">...</tr>
            <tr class="table-info">...</tr>
            <tr class="table-light">...</tr>
            <tr class="table-dark">...</tr>

            <!-- On cells (`td` or `th`) -->
            <tr>
              <td class="table-active">...</td>
              
              <td class="table-primary">...</td>
              <td class="table-secondary">...</td>
              <td class="table-success">...</td>
              <td class="table-danger">...</td>
              <td class="table-warning">...</td>
              <td class="table-info">...</td>
              <td class="table-light">...</td>
              <td class="table-dark">...</td>
            </tr>
            <tr class="table-warning">
              <th scope="row">1</th>
              <td>Mark</td>
              <td>แท่ง</td>
              <td>@mdo</td>
              <td>10</td>
              <td>10</td>
            </tr>
            <tr class="table-danger">
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>ด้าม</td>
              <td>@fat</td>
              <td>8</td>
              <td>6</td>
            </tr>
            <tr class="table-success">
              <th scope="row">3</th>
              <td >Larry the Bird</td>
              <td>อัน</td>
              <td>5</td>
              <td>5</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="form-group">
      <button type="button" class="btn btn-success">บันทึก</button>
      <button type="button" class="btn btn-danger">ยกเลิก</button>
      </div>
    </div>
  </div>
</div>