<?php include("header.php") ?>
        <div class="page-wrapper">
        <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Relatórios</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Relatórios</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <!-- Start Select date and type -->
                    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                                <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <h3 class="card-title">Pesquisar</h3>
                                        <h6 class="card-subtitle">For multiple file upload put class <code>.dropzone</code> to form.</h6>
                                        <hr>
                                        <div class="row p-t-20">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="control-label">Modelo do Relatório</label>
                                                    <select class="form-control custom-select">
                                                        <option value="">Chamados por equipamento</option>
                                                        <option value="">Chamados por Técnico</option>
                                                        <option value="">Chamados por Equipamento</option>
                                                        <option value="">Chamados por Especialidade</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Data inicial</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Técnico</label>
                                                    <select class="form-control custom-select">
                                                        <option value="">-Todos-</option>
                                                        <option value="">Técnico 1</option>
                                                        <option value="">Técnico 2</option>
                                                        <option value="">Técnico 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Data final</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                       
                                        <!--/row-->
                                        
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Perquisar</button>
                                        <button type="button" class="btn btn-inverse">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Select date and type -->
                    <!-- Start Report -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Exportação de relatórios - Pontos Bonificação</h4>
                                <h6 class="card-subtitle">Exporte os dados para Área de transferência, CSV, Excel, PDF & Impressão</h6>
                                
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Técnico</th>
                                                <th>Data</th>
                                                <th>Pontos</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                                <th>Técnico</th>
                                                <th>Data</th>
                                                <th>Pontos</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Wellington</td>
                                                <td>01/11/2018</td>
                                                <td>15,5</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Wellington</td>
                                                <td>01/11/2018</td>
                                                <td>15,5</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Wellington</td>
                                                <td>01/11/2018</td>
                                                <td>15,5</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Wellington</td>
                                                <td>02/11/2018</td>
                                                <td>15,5</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Wellington</td>
                                                <td>02/11/2018</td>
                                                <td>15,5</td>
                                            </tr>

                                            <tr>
                                                <td>Wellington</td>
                                                <td>02/11/2018</td>
                                                <td>15,5</td>
                                            </tr>

                                            <tr>
                                                <td>Wellington</td>
                                                <td>02/11/2018</td>
                                                <td>15,5</td>
                                            </tr>

                                            <tr>
                                                <td>Wellington</td>
                                                <td>02/11/2018</td>
                                                <td>15,5</td>
                                            </tr>

                                            <tr>
                                                <td>Wellington</td>
                                                <td>02/11/2018</td>
                                                <td>15,5</td>
                                            </tr>

                                            <tr>
                                                <td>Wellington</td>
                                                <td>02/11/2018</td>
                                                <td>15,5</td>
                                            </tr>

                                            <tr>
                                                <td>Wellington</td>
                                                <td>02/11/2018</td>
                                                <td>15,5</td>
                                            </tr>

                                            <tr>
                                                <td>Wellington</td>
                                                <td>02/11/2018</td>
                                                <td>15,5</td>
                                            </tr>

                                            <tr>
                                                <td>Wellington</td>
                                                <td>02/11/2018</td>
                                                <td>15,5</td>
                                            </tr>

                                            <tr>
                                                <td>Wellington</td>
                                                <td>02/11/2018</td>
                                                <td>15,5</td>
                                            </tr>

                                            <tr>
                                                <td>Wellington</td>
                                                <td>02/11/2018</td>
                                                <td>15,5</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <!-- End Report -->
                    </div>
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="Config/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="Config/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="Config/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="Config/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="Config/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="Config/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="Config/js/custom.min.js"></script>


    <script src="Config/js/lib/datatables/datatables.min.js"></script>
    <script src="Config/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="Config/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="Config/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="Config/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="Config/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="Config/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="Config/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="Config/js/lib/datatables/datatables-init.js"></script>
    <script src="Config/js/lib/dropzone/dropzone.js"></script>
</body>

</html>