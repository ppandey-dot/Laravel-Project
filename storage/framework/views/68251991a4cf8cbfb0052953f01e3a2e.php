

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title font-weight-bold"> CREATE GST BILL </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title text-uppercase">Invoice Basic Info</h4>
                    <hr>

                    <form action="<?php echo e(route('create-gst-bill')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label>Client Name</label>
                                    <select class="form-control border-bottom" name="party_id" required>
                                        <option value="">Please Select</option>
                                        <?php $__currentLoopData = $parties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $party): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($party->id); ?>"><?php echo e($party->full_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label>Invoice Date</label>
                                    <input type="date" class="form-control border-bottom" name="invoice_date" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label>Invoice Number</label>
                                    <input type="text" class="form-control border-bottom" name="invoice_no" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h4 class="header-title text-uppercase">Item Details</h4>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 border p-1 text-center">
                                <b>DESCRIPTIONS</b>
                            </div>
                            <div class="col-md-4 border p-1 text-center">
                                <b>TOTAL AMOUNT</b>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8 border p-2">
                                <input class="form-control" name="item_description" />
                            </div>
                            <div class="col-md-4 border p-2">
                                <input class="form-control" name="total_amount" type="number" step="0.01"
                                    id="totalAmountInput" oninput="calculateNetAmount()">
                            </div>
                        </div>

                        <div class="row mt-0">
                            <div class="col-md-3">
                                <label>CGST (%)</label>
                                <input type="number" class="form-control border-bottom" name="cgst_rate" id="cgst" oninput="calculateNetAmount()">
                                <span class="float-right gststyle" id="cgstDisplay">0</span>
                                <input type="hidden" id="cgstAmount" name="cgst_amount" value="0">
                            </div>

                            <div class="col-md-3">
                                <label>SGST (%)</label>
                                <input type="number" class="form-control border-bottom" name="sgst_rate" id="sgst" oninput="calculateNetAmount()">
                                <span class="float-right gststyle" id="sgstDisplay">0</span>
                                <input type="hidden" id="sgstAmount" name="sgst_amount" value="0">
                            </div>

                            <div class="col-md-3">
                                <label>IGST (%)</label>
                                <input type="number" class="form-control border-bottom" name="igst_rate" id="igst" oninput="calculateNetAmount()">
                                <span class="float-right gststyle" id="igstDisplay">0</span>
                                <input type="hidden" id="igstAmount" name="igst_amount" value="0">
                            </div>

                            <div class="col-md-3">
                                <ul style="list-style: none; float: right;">
                                    <li>
                                        <b>Total Amount:</b> ₹ <span id="totalAmountDisplay">0</span>
                                    </li>
                                    <li>
                                        <b>Tax:</b> ₹ <span id="taxDisplay">0</span>
                                        <input type="hidden" value="0" name="tax_amount" id="taxAmount">
                                    </li>

                                    <li>
                                        <b>Net Amount:</b> ₹ <span id="netAmountDisplay">0</span>
                                        <input type="hidden" value="0" name="net_amount" id="netAmount">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control border-bottom" name="declaration"
                                        placeholder="Declaration">
                                </div>
                                <button type="submit" class="btn btn-primary float-right mb-2">SUBMIT</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\gst_billing\resources\views/gst/add-gst-bill.blade.php ENDPATH**/ ?>