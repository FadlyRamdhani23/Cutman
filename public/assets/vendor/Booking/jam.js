<script>
            function clock() {
                var fullDate = new Date();
                var hours = fullDate.getHours();
                var minutes = fullDate.getMinutes();
                var seconds = fullDate.getSeconds();
                var date = fullDate.getDate();
                var month = fullDate.getMonth();
                var year = fullDate.getFullYear();
                var day = fullDate.getDay();
                var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
                var monthlist = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                var ampm = hours >= 12 ? 'pm' : 'am';
                hours = hours % 12;
                hours = hours ? hours : 12;
                hours = hours < 10 ? '0' + hours : hours;
                minutes = minutes < 10 ? '0' + minutes : minutes;
                seconds = seconds < 10 ? '0' + seconds : seconds;
                var time = hours + ":" + minutes + ":" + seconds + " " + ampm;
                var date = daylist[day] + " " + date + " " + monthlist[month] + " " + year;
                document.getElementsByClassName("time")[0].innerHTML = time;
                document.getElementsByClassName("date")[0].innerHTML = date;
                var t = setTimeout(clock, 500);
            }
            clock();
        </script>