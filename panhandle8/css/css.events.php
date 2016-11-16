<style>
.eventInfo div{
	display:none;
}
.eventInfo:hover div{
	display:block;
	position:absolute;
	
	left:1em;
	z-index:10;
	background-color: white;
	padding: .5em;
	border:2px solid;
	border-radius:1em;
	max-width:400px;
	min-width:300px;
	top:.5em;	
}
.eventInfo{
	padding-bottom:.4em;
}
.eventInfo>span{
	font-size: .8em;
	font-weight:bold;
	padding-left: .3em;
}

.eventsList {
    font-size: 1.2em;
}

.eventsList .eventInfo>a{
    color: navy;
    margin-bottom:-.2em;
}

.eventsList li{
	list-style: none;
	margin:.1em;
	position:relative;
}
.eventsList ul{
	padding: 0;
    margin: 0;
}
.eventsList>ul:first-child {
    border-right: 2px solid silver;
}
.eventsList>ul{
	float:left;
	width:48%;
}
.eventsList>ul>li>ul{
    margin-left: .5em;
    position:relative;
}
.eventsList>ul>li>ul>li{
    /*list-style:initial;*/
    
}

.eventsList>ul>li{
	margin: .1em;
    /* float: left; */
    /*border: 1px solid silver;*/
    padding: .1em;
}
.eventsListDate{
	/*float:left;*/
	font-weight:bold;
	font-size: 1.2em;
	color:navy;
}
.eventDetails>span{
display: block;	
}

.shortTitle{
	
    overflow: hidden;
    display: block;
    text-decoration:none;
}
.truncate, .shortTitle{
  width: 98%;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.e_title a{

    font-size: 1.1em;
    color: #555;
    font-weight: bold;	
}
.e_details{
	font-size: initial;
}



.columnbox div h4{
	font-size: 1.2em;
}
.columnbox>div:first-of-type{
	border:0;
}

.eventsList>ul {
    float: left;
    width: 100%;
}
.eventsList ul {
    padding: .2em;
    margin: 0;
}
.eventsList>ul:first-child {
    border-right: 0;
}

.eventsList .eventInfo .shortTitle{
	color:#777;
}

.eventDetails> .e_title a{
	color:navy;
}
</style>