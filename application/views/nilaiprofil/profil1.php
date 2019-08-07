<?php $this->load->view('head'); ?>
<script type="text/javascript">
$('#addCol').click( function() {  
 var tableID = "colTable";
 var tblBodyObj = document.getElementById(tableID).tBodies[0];
 for (var i=0; i<tblBodyObj.rows.length; i++) {
  var newCell = tblBodyObj.rows[i].insertCell(-1);
  newCell.innerHTML = "Kolom Baru"
 }
});
$('#delCol').click( function() {  
 var tableID = "colTable";
 var allRows = document.getElementById(tableID).rows;
 for (var i=0; i<allRows.length; i++) {
  if (allRows[i].cells.length > 1) {
   allRows[i].deleteCell(-1);
  }
 }
});
</script>
<aside class="right-side">
<!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
			<?php error_reporting(0); ?> 
            <?php echo $this->session->flashdata('pesan'); ?>
            <?php if($this->session->userdata('bagian') == 'hrd'){?>
            <?php echo anchor('jenistrening/tambah',"<i class='fa fa-plus'></i> Proses Iterasi Selanjutnya",['class'=>'btn btn-sm btn-success']); ?>
            <?php } ?>
            <p></p>
            <section class="panel">
            <header class="panel-heading">
            Data Awal
            </header>

               <input id="addCol" type="button" value="Tambah Kolom (+)" /> <input id="delCol" type="button" value="Hapus Kolom (-)" />
                  <table border="1" id="colTable" style="width: 100%;">
                  <tbody>
                  <tr>   <td>Kolom Asli</td>    </tr>
              </tbody>
              </table>
       
            </section>
            </div><!--end col-6 -->

        </div>
        <!-- row end -->
        </section><!-- /.content -->
        <div class="footer-main">
            Copyright &copy; PT. BARITO SARANA KARYA, <?php echo date('Y'); ?>
        </div>
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php $this->load->view('foot'); ?>