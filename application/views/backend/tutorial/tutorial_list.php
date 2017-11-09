</div>

    <style>
            .dataTables_wrapper {
                min-height: 500px
            }
            
            .dataTables_processing {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 100%;
                margin-left: -50%;
                margin-top: -25px;
                padding-top: 20px;
                text-align: center;
                font-size: 1.2em;
                color:grey;
            }
            body{
                padding: 15px;
            }
        </style>
        
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h4 style="margin-top:30px">DATA TUTORIAL</h4>
                </hr></br>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ?
                    $this->session->userdata('message') : ''; ?>
                </div>
            </div>

            <div class="col-md-4 text-right" style="margin-top: 30px">
            <?php echo anchor(site_url('adminweb/tutorial/create'), 'Create', 'class="btn btn-primary"'); ?>
    		<?php echo anchor(site_url('adminweb/tutorial/excel'), 'Excel', 'class="btn btn-primary"'); ?>
    		<?php echo anchor(site_url('adminweb/tutorial/word'), 'Word', 'class="btn btn-primary"'); ?>
    	    </div>
        </div>

        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Judul Tutorial</th>
		    <th>Gambar Tutorial</th>
		    <th>Isi Tutorial</th>
		    <th>Url Tutorial</th>
		    <th>Id Kategori</th>
		    <th>Tanggal</th>
		    <th width="200px">Action</th>
                </tr>
            </thead>
	    
        </table>
  

        <script src="<?php echo base_url('assets-admin/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets-admin/datatables/datatables/media/js/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets-admin/datatables/datatables/media/js/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">

            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mytable").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "tutorial/json", "type": "POST"},
                    columns: [
                        {
                            "data": "id",
                            "orderable": false
                        },
                        {"data": "judul_tutorial"},
                        {"data": "gambar_tutorial"},
                        {"data": "isi_tutorial"},
                        {"data": "url_tutorial"},
                        {"data": "id_kategori"},
                        {"data": "tanggal"},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                    ],
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
        </script>
   