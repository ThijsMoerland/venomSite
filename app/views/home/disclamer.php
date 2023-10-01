<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Disclamer</h5>
                <form action="/home/okDisclamer" method="POST" class="modal-body">
                    <button type="submit" class="close">&times;</button>
                </form>
            </div>
            <div class="modal-body">
				<p>This is created just as a fun project for myself because i love coding and venomous reptiles</p>
                <p>Do not use this as a source of information for your own safety</p>
                <p>and this information is just some of my knowladge and my opinions so i might be wrong</p>
                <p>kind feedback is welcome</p>

            </div>
            <form action="/home/okDisclamer" method="POST" class="modal-body">
                <button type="submit" class="btn btn-secondary">Okey i understand</button>
            </form>
        </div>
    </div>
</div>

<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>