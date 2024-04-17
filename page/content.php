<div class="m-content">
    <button class="ms-btn" id="showToast">
        <div class="icon24 icon-plus"></div>
        <div class="text">button</div>
    </button>
</div>


<script>
    var button = document.getElementById("showToast").addEventListener('click', function (){
       var toast = document.getElementById("m-toast").classList.remove('hidden');
    });
</script>