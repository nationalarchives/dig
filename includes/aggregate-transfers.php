<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Home Office Transfers</h1>
    <div class="row">
        <div class="col-md-3">
            <p class="navbar-left">Filter by</p>
        </div>
        <div class="col-md-3">
            <select class="form-control">
                <option>Transfer type</option>
            </select>
        </div>
        <div class="col-md-3">
            <select class="form-control">
                <option>Year</option>
            </select>
        </div>
        <div class="col-md-3">
            <select class="form-control">
                <option>Transfer status</option>
            </select>
        </div>
    </div>
    <div class="results">
        <?php render_aggregate_transfers() ?>
    </div>
</div>