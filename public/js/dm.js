let dm = document.getElementById('dm-container');

dm.scrollTop = dm.scrollHeight;

dm.addEventListener('scroll', function(e) {
    if (dm.scrollTop + dm.clientHeight == dm.scrollHeight) {
         dm.scrollTop = dm.scrollHeight;
    }
});