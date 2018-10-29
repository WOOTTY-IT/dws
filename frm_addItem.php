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
      <h1>บันทึกรายการวัสดุ</h1>
      <form>

        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="inputEmail4">รหัสรายการ</label>
            <input type="email" class="form-control" id="inputEmail4" readonly="" placeholder="รหัสรายการ">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">ชื่อรายการวัสดุ</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="ชื่อรายการวัสดุ">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputState">ประเภทวัสดุ</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>ประเภทวัสดุ...</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">หน่วยนับ</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>หน่วยนับ...</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="inputEmail4">อัพโหลดรูปภาพวัสดุ</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>

      </form>

      <div class="form-group mx-auto">
      <button type="button" class="btn btn-success">Success</button>
      <button type="button" class="btn btn-danger">Danger</button>
      </div>
    </div>
  </div>
</div>