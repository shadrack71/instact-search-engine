<?php 
include('inc/header4.php');
?>
<title>Instant Search with Ajax, PHP & MySQL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
<script src="js/search.js"></script>

<?php include('inc/container4.php');?>
<div class="container">
    <h3>Example: Instant Search with Ajax, PHP & MySQL</h3>
    <br />
    <div class="card">
        <div class="card-header">Search Result</div>
        <div class="card-body" id="searchSection">
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control"
                    placeholder="Type your search keyword here" />
            </div>
            <div class="table-responsive" id="searchResult"></div>
        </div>
    </div>
</div>
<?php include('inc/footer4.php');?>