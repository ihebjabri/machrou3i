


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
rel="stylesheet"
/>

</head>
<body>


    <style>
        .gradient-custom-2 {
      /* fallback for old browsers */
      background: #7e40f6;
    
      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgba(126, 64, 246, 1), rgba(80, 139, 252, 1));
    
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, rgba(126, 64, 246, 1), rgba(80, 139, 252, 1))
    }
    
    .mask-custom {
      background: rgba(24, 24, 16, .2);
      border-radius: 2em;
      backdrop-filter: blur(25px);
      border: 2px solid rgba(255, 255, 255, 0.05);
      background-clip: padding-box;
      box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
    }
    </style>
    <section class="vh-100 gradient-custom-2" style="height: 100%">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            
            
            
            <div class="col-md-4 col-xl-4">
      
              <div class="card mask-custom crollbar scrollbar-primary">
                <div class="card-body p-4 text-white" style="overflow: hidden;">
      
                  <div class="text-center pt-3 pb-2">
                    <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-todo-list/check1.png" alt="Check" width="60">
                    <h2 class="my-4">Task List</h2>
                  </div>


               
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-header"><span class="badge bg-danger">High priority</span> <span class="badge bg-success">High priority</span></div>
                            <div class="card-body">
                              <h5 class="card-title">Primary card title</h5>
                              <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                              </p>
                            
                            </div>

                            <div class="card-footer float-end">
                                  
                                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-chat/ava2-bg.png" alt="avatar 1"
                                   style="width: 30px; height: auto;" class="float-end" >
                                  
                               
                               </div>

                              
                        
                          </div>
                



      
             
      
      
                </div>
              </div>
      
            </div>



            <!-- group 2 -->



            <div class="col-md-4 col-xl-4">
      
                <div class="card mask-custom">
                  <div class="card-body p-4 text-white">
        
                    <div class="text-center pt-3 pb-2">
                      <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-todo-list/check1.png" alt="Check" width="60">
                      <h2 class="my-4"> In Progress</h2>
                    </div>
        
                    <table class="table text-white mb-0">
                      <thead>
                        <tr>
                         {{--  <th scope="col">Team Member</th> --}}
                          <th scope="col">Task</th>
                          <th scope="col">Priority</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="fw-normal">
                          {{-- <th>
                            <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-chat/ava1-bg.png" alt="avatar 1"
                              style="width: 45px; height: auto;">
                            <span class="ms-2">Alice Mayer</span>
                          </th>
                          --}}
                          <td>
                            <span >Call Sam For payments</span >
                          </td>
                          <td class="align-middle">
                            <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                          </td>
                          <td class="align-middle">
                            <a href="#!" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check fa-lg text-success me-3"></i></a>
                            <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                          </td>
                        </tr>
                        <tr class="fw-normal">
                          {{--  <th>
                            <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-chat/ava2-bg.png" alt="avatar 1"
                              style="width: 45px; height: auto;">
                            <span class="ms-2">Kate Moss</span>
                          </th>--}}
                          <td class="align-middle">Make payment to Bluedart</td>
                          <td class="align-middle">
                            <h6 class="mb-0"><span class="badge bg-success">Low priority</span></h6>
                          </td>
                          <td class="align-middle">
                            <a href="#!" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check fa-lg text-success me-3"></i></a>
                            <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                          </td>
                        </tr>
                        <tr class="fw-normal">
                          {{--  <th>
                            <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-chat/ava3-bg.png" alt="avatar 1"
                              style="width: 45px; height: auto;">
                            <span class="ms-2">Danny McChain</span>
                          </th>--}}
                          <td class="align-middle">Office rent</td>
                          <td class="align-middle">
                            <h6 class="mb-0"><span class="badge bg-warning">Middle priority</span></h6>
                          </td>
                          <td class="align-middle">
                            <a href="#!" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check fa-lg text-success me-3"></i></a>
                            <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                          </td>
                        </tr>
                        <tr class="fw-normal">
                         {{--   <th>
                            <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-chat/ava5-bg.png" alt="avatar 1"
                              style="width: 45px; height: auto;">
                            <span class="ms-2">Alexa Chung</span>
                          </th>--}}
                          <td class="align-middle">Office grocery shopping</td>
                          <td class="align-middle">
                            <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                          </td>
                          <td class="align-middle">
                            <a href="#!" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check fa-lg text-success me-3"></i></a>
                            <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                          </td>
                        </tr>
                        <tr class="fw-normal">
                        {{--  <th class="border-0">
                            <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-chat/ava6-bg.png" alt="avatar 1"
                              style="width: 45px; height: auto;">
                            <span class="ms-2">Ben Smith</span>
                          </th>--}}
                          <td class="border-0 align-middle">Ask for Lunch to Clients</td>
                          <td class="border-0 align-middle">
                            <h6 class="mb-0"><span class="badge bg-success">Low priority</span></h6>
                          </td>
                          <td class="border-0 align-middle">
                            <a href="#!" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check fa-lg text-success me-3"></i></a>
                            <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
        
        
                  </div>
                </div>
        
              </div>



              <div class="col-md-4 col-xl-4">
      
                <div class="card mask-custom">
                  <div class="card-body p-4 text-white">
        
                    <div class="text-center pt-3 pb-2">
                      <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-todo-list/check1.png" alt="Check" width="60">
                      <h2 class="my-4">Task List</h2>
                    </div>
        
                    <table class="table text-white mb-0">
                      <thead>
                        <tr>
                         {{--  <th scope="col">Team Member</th> --}}
                          <th scope="col">Task</th>
                          <th scope="col">Priority</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="fw-normal">
                          {{-- <th>
                            <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-chat/ava1-bg.png" alt="avatar 1"
                              style="width: 45px; height: auto;">
                            <span class="ms-2">Alice Mayer</span>
                          </th>
                          --}}
                          <td>
                            <span >Call Sam For payments</span >
                          </td>
                          <td class="align-middle">
                            <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                          </td>
                          <td class="align-middle">
                            <a href="#!" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check fa-lg text-success me-3"></i></a>
                            <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                          </td>
                        </tr>
                        <tr class="fw-normal">
                          {{--  <th>
                            <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-chat/ava2-bg.png" alt="avatar 1"
                              style="width: 45px; height: auto;">
                            <span class="ms-2">Kate Moss</span>
                          </th>--}}
                          <td class="align-middle">Make payment to Bluedart</td>
                          <td class="align-middle">
                            <h6 class="mb-0"><span class="badge bg-success">Low priority</span></h6>
                          </td>
                          <td class="align-middle">
                            <a href="#!" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check fa-lg text-success me-3"></i></a>
                            <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                          </td>
                        </tr>
                        <tr class="fw-normal">
                          {{--  <th>
                            <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-chat/ava3-bg.png" alt="avatar 1"
                              style="width: 45px; height: auto;">
                            <span class="ms-2">Danny McChain</span>
                          </th>--}}
                          <td class="align-middle">Office rent</td>
                          <td class="align-middle">
                            <h6 class="mb-0"><span class="badge bg-warning">Middle priority</span></h6>
                          </td>
                          <td class="align-middle">
                            <a href="#!" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check fa-lg text-success me-3"></i></a>
                            <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                          </td>
                        </tr>
                        <tr class="fw-normal">
                         {{--   <th>
                            <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-chat/ava5-bg.png" alt="avatar 1"
                              style="width: 45px; height: auto;">
                            <span class="ms-2">Alexa Chung</span>
                          </th>--}}
                          <td class="align-middle">Office grocery shopping</td>
                          <td class="align-middle">
                            <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
                          </td>
                          <td class="align-middle">
                            <a href="#!" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check fa-lg text-success me-3"></i></a>
                            <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                          </td>
                        </tr>
                        <tr class="fw-normal">
                        {{--  <th class="border-0">
                            <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-chat/ava6-bg.png" alt="avatar 1"
                              style="width: 45px; height: auto;">
                            <span class="ms-2">Ben Smith</span>
                          </th>--}}
                          <td class="border-0 align-middle">Ask for Lunch to Clients</td>
                          <td class="border-0 align-middle">
                            <h6 class="mb-0"><span class="badge bg-success">Low priority</span></h6>
                          </td>
                          <td class="border-0 align-middle">
                            <a href="#!" data-mdb-toggle="tooltip" title="Done"><i class="fas fa-check fa-lg text-success me-3"></i></a>
                            <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i class="fas fa-trash-alt fa-lg text-warning"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
        
        
                  </div>
                </div>
        
              </div>



          </div>
        </div>
      </section>
    
</body>
</html>