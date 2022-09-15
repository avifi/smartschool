  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tautan
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tautan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tautan</h3>

          <div class="box-tools pull-right">
            <button id="add_button" class="btn btn-box-tool" title="Tambah Data"><i class="fa fa-plus-circle"></i></button>
            <button type="button" class="btn btn-box-tool" onClick="window.location.reload();"
                    title="Reload">
              <i class="fa fa-refresh"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php endif ?>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>URL</th>
                <th>Keterangan</th>
                <th>Target</th>
                <th><i class="fa fa-eye"></i></th>
                <th><i class="fa fa-trash-o"></i></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($links as $link): ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><a href="<?php echo $link['link_url'] ?>" target="_blank"><?php echo $link['link_url'] ?></a></td>
                <td><?php echo $link['link_title'] ?></td>
                <td><?php echo $link['link_target'] ?></td>
                <td><a href="#" class="detail" id="<?php echo $link['id'] ?>" title="Detail Tautan"><i class="fa fa-eye"></i></a></td>
                <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
              </tr>    
            <?php endforeach ?>
              
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- modal -->
  <div class="modal fade" id="barangModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div class="box box-info">
            <?php echo form_open('admin/links/action', 'method="post" class="form-horizontal" id="form_barang"'); ?>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">URL</label>
                  <div class="col-sm-9">
                    <input type="text" name="link_url" id="url" placeholder="https://" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Keterangan</label>
                  <div class="col-sm-9">
                    <input type="text" name="link_title" id="title" placeholder="Keterangan" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Target</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="link_target">
                      <option value="_blank" id="blank">Blank</option>
                      <option value="_self" id="self">Self</option>
                      <option value="_parent" id="parent">Parent</option>
                      <option value="_top" id="top">Top</option>
                    </select>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="id_link" id="id_link">
          <input type="hidden" name="data_action" id="data_action" value="insert" />
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" name="action" id="action" value="add" />
        </div>
            </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <script type="text/javascript">
    $(document).ready(function () {

      $('#add_button').click(function(){
        $('#form_barang')[0].reset();
        $('.modal-title').text("Tambah Tautan");
        $('#action').val('Tambahkan');
        $('#data_action').val("insert");
        $('#barangModal').modal('show');
      });

      $(document).on('click', '.detail', function(){
        var link_id = $(this).attr('id');
        $.ajax({
          url:"<?php echo base_url(); ?>admin/links/action",
          method:"POST",
          data:{link_id:link_id, data_action:'fetch_single'},
          dataType:"json",
          success:function(data)
          {
            $('#barangModal').modal('show');
            $('#url').val(data.link_url);
            $('#title').val(data.link_title);
            if (data.link_target == '_blank') {
              $('#blank').attr('selected', 'selected');
            }
            $('.modal-title').text('Detail Tautan');
            $('#id_link').val(link_id);
            $('#action').val('Update Data');
            $('#data_action').val('Edit');
          }
        })
      });

    })
  </script>