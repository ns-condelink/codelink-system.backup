<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Manage Policies </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">manage policy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">policies</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a href="<?php echo base_url; ?>Policy/addPolicy"><button type="button" class="btn btn-primary btn-icon-text  mb-3 ms-2">
                                <i class="mdi mdi-file-check btn-icon-prepend"></i> Add New Policy </button></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Id </th>
                                        <th> Policy Title </th>
                                        <th> Policy Description </th>
                                        <th> Policy Link </th>
                                        <th> Policy Image </th>
                                        <th> Edit </th>
                                        <th> Delete </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($data['policy_data'])) {
                                       
                                            foreach ($data['policy_data'] as $key => $value) {

                                    ?>
                                                <tr>
                                                    <td class="serial"><?php echo $key + 1; ?></td>
                                                    <td><?php echo $value->policy_title; ?> </td>
                                                    <td><?php echo $value->policy_desc; ?> </td>
                                                    <td> <?php echo $value->policy_link; ?> </td>
                                                    <td> <?php echo $value->policy_image; ?></td>
                                                    <td><a href="<?php echo base_url; ?>Policy/editPolicy/<?php echo $value->id; ?>"><button type="button" class="btn btn-outline-primary btn-icon-text" id="edit_policy_btn" name="edit_policy_btn" value="<?php echo $value->id; ?>">
                                                                <i class="mdi mdi-file-check btn-icon-prepend"></i> Edit </button></a></td>
                                                    <td><button type="button" class="btn btn-outline-danger btn-icon-text" id="delete_policy_btn" name="delete_policy_btn" value="<?php echo $value->id; ?>">
                                                            <i class="mdi mdi-file-check btn-icon-prepend"></i> Delete </button></td>
                                                </tr>
                                    <?php
                                            }
                                        }
                                    
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            // To call delPolicy method when click on (delete_policy_btn)
            $(document).on('click', '#delete_policy_btn', function() {
                $.ajax({
                    url: "<?php echo base_url; ?>Policy/delPolicy/" + $(this).val(),
                    type: 'post',
                    success: function(response) {
                        jsonResponse = JSON.parse(response);
                        if (jsonResponse.success) {
                            location.reload();
                        }
                    }
                })
            })
        })
    </script>