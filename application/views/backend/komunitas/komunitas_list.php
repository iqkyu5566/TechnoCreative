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
                <h4 style="margin-top:30px">DATA KOMUNITAS</h4>
                </hr></br>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right" style="margin-top: 30px">
                <?php echo anchor(site_url('adminweb/komunitas/create'), 'Create', 'class="btn btn-primary"'); ?>
		          <?php echo anchor(site_url('adminweb/komunitas/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
        </div>

        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="0px">No</th>
		    <th>Judul Komunitas</th>
		    <th>Gambar Komunitas</th>
		    <th width="1000px">Isi Komunitas</th>
		    <th>Url Komunitas</th>
		    <th>Kategori</th>
		    <th>Status</th>
		    <th>Tanggal</th>
		    <th>Waktu</th>
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
                    ajax: {"url": "komunitas/json", "type": "POST"},
                    columns: [
                        {
                            "data": "id_komunitas",
                            "orderable": false
                        },
                        {"data": "judul_komunitas"},
                        {"data": "gambar_komunitas"},
                        {"data": "isi_komunitas"},
                        {"data": "url_komunitas"},
                        {"data": "id_kategori"},
                        {"data": "status_komunitas"},
                        {"data": "tanggal"},
                        {"data": "waktu"},
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
