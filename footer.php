<footer>
    <div class="wrap">
        <div class="flex jcsb ci">
            <div class="one">
                <h1>Quick Links</h1>
                <br>
                <div class="items">
                    <ul>
                        <li><a href="#" target="_blank" rel="noopener noreferrer">Homepage</a></li>
                        <li><a href="#" target="_blank" rel="noopener noreferrer">Registration</a></li>
                        <li><a href="#" target="_blank" rel="noopener noreferrer">Venue</a></li>
                        <li><a href="#" target="_blank" rel="noopener noreferrer">Previous ICHRE</a></li>
                        <li><a href="#" target="_blank" rel="noopener noreferrer">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="two text-center text-white">
                <img src="images/ku.png" alt="">
                <br>
                <p class="m-0">11 - 12 DECEMBER 2019</p>
                <p class="m-0">Marriott Hotel, Kathmandu</p>
            </div>
            <div class="three text-white text-center">
                <h1>Contact Us</h1>
                <br>
                <p class="m-0">Kathmandu University</p>
                <p>Dhulikhel</p>
                <p class="m-0">Phone: <a href="tel:"> 977-011-415100</a></p>
                <p>Email: <a href="mailto: info@ku.edu.np"> info@ku.edu.np</a></p>
            </div>
        </div>
    </div>
</footer>

<script>
    function toggleSidebar(){
        let doc=document.querySelector('#sideNavContents');
        let doc1=document.querySelector('#sidenav');

        if(doc1.style.display=='block'){
            doc.classList.remove('animateIn');
            doc.classList.add('animateOut');
            setTimeout(() => {
                doc1.style.display='none';
            }, 250);
        }
        else{
            console.log("here");
            doc1.style.display='block';
            doc.classList.remove('animateOut');
            doc.classList.add('animateIn');            
        }
    }
</script>
</body>
</html>