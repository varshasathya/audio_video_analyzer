<!DOCTYPE html>
<html>
<body>


<p id="title">title</p>
<p id="anno">Annotations</p>
<p id="topics">topics</p>

<script>

var obj = JSON.parse(`[{"topics":{"joint committee":[{"startTime":"00:00:11.8100000","endTime":"00:00:20.0200000","startSeconds":11.8,"endSeconds":20}],"doubts raised":[{"startTime":"00:00:00","endTime":"00:00:11.8100000","startSeconds":0,"endSeconds":11.8},{"startTime":"00:00:26","endTime":"00:00:32","startSeconds":26,"endSeconds":32}],"financial resolution":[{"startTime":"00:00:00","endTime":"00:00:11.8100000","startSeconds":0,"endSeconds":11.8},{"startTime":"00:00:12","endTime":"00:00:20","startSeconds":12,"endSeconds":20},{"startTime":"00:00:20","endTime":"00:00:26","startSeconds":20,"endSeconds":26},{"startTime":"00:00:26","endTime":"00:00:32","startSeconds":26,"endSeconds":32},{"startTime":"00:00:32","endTime":"00:00:52.9800000","startSeconds":32,"endSeconds":53}],"deposit insurance":[{"startTime":"00:00:00","endTime":"00:00:11.8100000","startSeconds":0,"endSeconds":11.8},{"startTime":"00:00:12","endTime":"00:00:20","startSeconds":12,"endSeconds":20},{"startTime":"00:00:20","endTime":"00:00:26","startSeconds":20,"endSeconds":26},{"startTime":"00:00:26","endTime":"00:00:32","startSeconds":26,"endSeconds":32},{"startTime":"00:00:32","endTime":"00:00:52.9800000","startSeconds":32,"endSeconds":53}]},"annotations":{"indoor":[{"startTime":"00:00:14.1600000","endTime":"00:00:26.9600000","startSeconds":14.2,"endSeconds":27},{"startTime":"00:00:34.6400000","endTime":"00:00:37.2000000","startSeconds":34.6,"endSeconds":37.2},{"startTime":"00:00:57.6800000","endTime":"00:00:58.9600000","startSeconds":57.7,"endSeconds":59},{"startTime":"00:01:07.9200000","endTime":"00:01:10.4800000","startSeconds":67.9,"endSeconds":70.5}],"screen":[{"startTime":"00:00:00.0800000","endTime":"00:00:00.1600000","startSeconds":0.1,"endSeconds":0.2},{"startTime":"00:00:03.9200000","endTime":"00:00:11.6000000","startSeconds":3.9,"endSeconds":11.6},{"startTime":"00:01:10.4800000","endTime":"00:01:11.7600000","startSeconds":70.5,"endSeconds":71.8}],"monitor":[{"startTime":"00:00:18","endTime":"00:00:19.2800000","startSeconds":18,"endSeconds":19.3},{"startTime":"00:00:30.8000000","endTime":"00:00:32.0800000","startSeconds":30.8,"endSeconds":32.1}],"woman":[{"startTime":"00:00:00.0800000","endTime":"00:00:01.4400000","startSeconds":0.1,"endSeconds":1.4}],"electronics":[{"startTime":"00:00:02.6400000","endTime":"00:00:03.9200000","startSeconds":2.6,"endSeconds":3.9}],"screenshot":[{"startTime":"00:00:50","endTime":"00:00:51.2800000","startSeconds":50,"endSeconds":51.3}],"person":[{"startTime":"00:01:11.7600000","endTime":"00:01:12","startSeconds":71.8,"endSeconds":72}]},"titles":{"indoor":[{"startTime":"00:00:14.1600000","endTime":"00:00:26.9600000","startSeconds":14.2,"endSeconds":27},{"startTime":"00:00:34.6400000","endTime":"00:00:37.2000000","startSeconds":34.6,"endSeconds":37.2},{"startTime":"00:00:57.6800000","endTime":"00:00:58.9600000","startSeconds":57.7,"endSeconds":59},{"startTime":"00:01:07.9200000","endTime":"00:01:10.4800000","startSeconds":67.9,"endSeconds":70.5}],"screen":[{"startTime":"00:00:00.0800000","endTime":"00:00:00.1600000","startSeconds":0.1,"endSeconds":0.2},{"startTime":"00:00:03.9200000","endTime":"00:00:11.6000000","startSeconds":3.9,"endSeconds":11.6},{"startTime":"00:01:10.4800000","endTime":"00:01:11.7600000","startSeconds":70.5,"endSeconds":71.8}],"monitor":[{"startTime":"00:00:18","endTime":"00:00:19.2800000","startSeconds":18,"endSeconds":19.3},{"startTime":"00:00:30.8000000","endTime":"00:00:32.0800000","startSeconds":30.8,"endSeconds":32.1}],"woman":[{"startTime":"00:00:00.0800000","endTime":"00:00:01.4400000","startSeconds":0.1,"endSeconds":1.4}],"electronics":[{"startTime":"00:00:02.6400000","endTime":"00:00:03.9200000","startSeconds":2.6,"endSeconds":3.9}],"screenshot":[{"startTime":"00:00:50","endTime":"00:00:51.2800000","startSeconds":50,"endSeconds":51.3}],"person":[{"startTime":"00:01:11.7600000","endTime":"00:01:12","startSeconds":71.8,"endSeconds":72}],"0":"Former Minister of Defence","1":null}},{"topics":100,"annotations":100,"titles":100}]`);


var topics="",annotations="",titles="";

var topic=obj[0]["topics"],
	title=obj[0]["annotations"],
    anno=obj[0]["titles"];

for(var x in topic)
topics+="<h5>"+x+"</h5>";


for(var y in titles)
annotations+="<h5>"+y+"</h5>";

for(var z in title)
titles+="<h5>"+z+"</h5>";


document.getElementById("title").innerHTML+=titles;

document.getElementById("anno").innerHTML+=annotations;

document.getElementById("topics").innerHTML+=topics;






</script>

</body>
</html>
