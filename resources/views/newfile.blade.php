<html>
<head>
    <link href="{{url('')}}/css/app.css" rel="stylesheet" type="text/css" />

<title>
    Hotel Management System
</title>

</head>



<body>
<div class="top-bar" id="example-menu">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">Hotel Management System</li>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Purchase</a></li>
            <li><a href="#">Sale</a></li>
            <li><a href="#">Bill</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li><input type="search" placeholder="Search"></li>
            <li><button type="button" class="button">Search</button></li>
        </ul>
    </div>
</div>
<form>
    <label>

        <b> <input type="text" style="text-align:center;" value="Registration Form"></b>
    </label>
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-6 cell">
                <label>Enter your Name
                    <input type="text" placeholder="Name">
                </label>
            </div>
            <div class="medium-6 cell">
                <label>Enter Your Father Name
                    <input type="text" placeholder="Father Name">
                </label>
            </div>
        </div>
    </div>

    <center>
    <div class="input-group"  style=" width: 72%;">
        <span class="input-group-label">$</span>
        <input class="input-group-field" type="number">
        <div class="input-group-button">
            <input type="submit" class="button" value="Submit">
        </div>
    </div>
    </center>
</form>
<div class="callout large">
    <div class="row column text-center">
        <h1>Changing the World Through Design</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
        <a href="#" class="button large">Learn More</a>
        <a href="#" class="button large hollow">Learn Less</a>
    </div>
</div>

<div class="grid-container full">
    <div class="grid-x grid-margin-x" style="background-color:red">
        <div class="cell small-4" style="background-color:#pink">Grig container full</div>
        <div class="cell small-4" style="background-color:#5678">cell</div>
    </div>
</div>
<div class="grid-x grid-margin-x" style="background-color:blue">
    <div class="small-4 cell">4 cells</div>
    <div class="auto cell" style="background-color:red">Whatever's left!(using auto cell class take up the remaining space)</div>
</div>
<span>Shrink class</span>
<div class="grid-x grid-margin-x"  style="background-color:blue">
    <div class="shrink cell"  style="background-color:yellow">Shrink!</div>
    <div class="auto cell"  style="background-color:red">Expand!</div>
</div>
<hr>
<lable>responsive adjestment</lable>
<div class="grid-x" style="background-color:blue">
    <div class="large-auto cell" style="background-color:red">One</div>
    <div class="large-auto cell" style="background-color:yellow">Two</div>
    <div class="large-auto cell" style="background-color:red">Three</div>
    <div class="large-auto cell" style="background-color:yellow">Four</div>
    <div class="large-auto cell" style="background-color:red">Five</div>
    <div class="large-auto cell" style="background-color:yellow">Six</div>
</div>
<hr>
<div class="grid-x grid-margin-x medium-margin-collapse" style="background-color:red" >
    <div class="small-6 cell" style="background-color:yellow">
        Gutters at small no gutters at medium.
    </div>
    <div class="small-6 cell" style="background-color:pink">
        Gutters at small no gutters at medium.
    </div>
</div>
<span>
 offset
</span>
<div class="grid-x grid-margin-x" style="background-color:pink">
    <div class="small-4 large-offset-2 cell" style="background-color:red">Offset 2 on large</div>
    <div class="small-4 cell" style="background-color:yellow">4 cells</div>
</div>
<span>Block Grid</span>
<div class="grid-x grid-padding-x small-up-2 medium-up-4 large-up-6" style="background-color:pink" >
    <div class="cell" style="background-color:red">cell</div>
    <div class="cell" style="background-color:blue">cell</div>
    <div class="cell" style="background-color:white">cell</div>
    <div class="cell" style="background-color:red">cell</div>
    <div class="cell" style="background-color:blue">cell</div>
    <div class="cell" style="background-color:red">cell</div>
</div>
<span>Vertical cell </span>
<div class="grid-y" style="height: 500px;" style="background-color:blue">
    <div class="cell small-6 medium-8 large-2" style="background-color:red">
        6/8/2
    </div>
    <div class="cell small-2 medium-4 large-10" style="background-color:yellow">
        6/4/10
    </div>
</div>
<hr>
<hr>
<div class="grid-y medium-grid-frame" style="background-color:Lightblue">
    <div class="cell shrink header medium-cell-block-container">
        <h1>Grid Frame Header</h1>
        <div class="grid-x grid-padding-x" style="background-color:skyblue">
            <div class="cell medium-4" style="background-color:lightpink">
                A medium 4 cell
            </div>
            <div class="cell medium-4 medium-cell-block" style="background-color:lightgreen">
                <p style="width:80vw;">A medium 4 cell block... on medium this content should overflow and let you horizontally scroll across... one might use this for an array of options</p>
            </div>
            <div class="cell medium-4" style="background-color:lightpink">
                A medium 4 cell
            </div>
        </div>
    </div>
    <div class="cell medium-auto medium-cell-block-container" style="background-color:silver">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-4 medium-cell-block-y" style="background-color:lightyellow">
                <h2>Independent scrolling sidebar</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus odio, accumsan id ullamcorper eget, varius nec erat. Nulla facilisi. Donec dui felis, euismod nec finibus vitae, dapibus quis arcu. Maecenas tempor et ipsum quis venenatis. Ut posuere sed augue sit amet efficitur. Sed imperdiet, justo id tempus rhoncus, est est viverra turpis, non vulputate magna lectus et nisl. Pellentesque ultrices porttitor vehicula. Ut aliquet efficitur ligula, a consectetur felis. Proin tristique ut augue nec luctus. Curabitur a sapien pretium, auctor elit a, efficitur erat. Donec tincidunt dui vel velit bibendum euismod. Cras vitae nibh dui. Aliquam erat volutpat. Etiam sit amet arcu a erat efficitur facilisis. Ut viverra dapibus turpis, et ornare justo. Integer in dui cursus, dignissim tortor a, hendrerit risus.</p>

                <p>Suspendisse pulvinar, massa iaculis feugiat lobortis, dolor sapien vestibulum nulla, vel cursus tellus leo in lorem. Aliquam eu placerat urna. Suspendisse sed viverra orci, ut mattis neque. Fusce non ultrices nisi. In sagittis varius mollis. Quisque dolor quam, consectetur eu lacinia ac, ullamcorper vel arcu. Nullam mattis imperdiet nulla sed ornare. Praesent tristique, est id eleifend vestibulum, neque nibh condimentum ex, nec lobortis purus justo a libero. Phasellus id ex ac nunc hendrerit hendrerit. Nullam urna ipsum, rutrum at fringilla vel, venenatis non purus. Maecenas egestas ex vitae venenatis molestie. Ut et odio egestas, accumsan neque et, viverra nisl. Sed faucibus nec nulla sed imperdiet. Fusce quis sem ac urna semper tempor a id elit. Nulla fringilla vitae sapien a vehicula.</p>

            </div>
            <div class="cell medium-8 medium-cell-block-y" style="background-color:lightgreen">
                <h2>Independent scrolling body</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus odio, accumsan id ullamcorper eget, varius nec erat. Nulla facilisi. Donec dui felis, euismod nec finibus vitae, dapibus quis arcu. Maecenas tempor et ipsum quis venenatis. Ut posuere sed augue sit amet efficitur. Sed imperdiet, justo id tempus rhoncus, est est viverra turpis, non vulputate magna lectus et nisl. Pellentesque ultrices porttitor vehicula. Ut aliquet efficitur ligula, a consectetur felis. Proin tristique ut augue nec luctus. Curabitur a sapien pretium, auctor elit a, efficitur erat. Donec tincidunt dui vel velit bibendum euismod. Cras vitae nibh dui. Aliquam erat volutpat. Etiam sit amet arcu a erat efficitur facilisis. Ut viverra dapibus turpis, et ornare justo. Integer in dui cursus, dignissim tortor a, hendrerit risus.</p>
                <p>Suspendisse pulvinar, massa iaculis feugiat lobortis, dolor sapien vestibulum nulla, vel cursus tellus leo in lorem. Aliquam eu placerat urna. Suspendisse sed viverra orci, ut mattis neque. Fusce non ultrices nisi. In sagittis varius mollis. Quisque dolor quam, consectetur eu lacinia ac, ullamcorper vel arcu. Nullam mattis imperdiet nulla sed ornare. Praesent tristique, est id eleifend vestibulum, neque nibh condimentum ex, nec lobortis purus justo a libero. Phasellus id ex ac nunc hendrerit hendrerit. Nullam urna ipsum, rutrum at fringilla vel, venenatis non purus. Maecenas egestas ex vitae venenatis molestie. Ut et odio egestas, accumsan neque et, viverra nisl. Sed faucibus nec nulla sed imperdiet. Fusce quis sem ac urna semper tempor a id elit. Nulla fringilla vitae sapien a vehicula.</p>
                <p>Nullam vestibulum lorem nec lectus egestas, nec ullamcorper diam maximus. Maecenas condimentum, nibh at blandit semper, ex erat tempus magna, id maximus neque velit accumsan nibh. Aenean dignissim lorem eu nisl laoreet vestibulum. Vivamus efficitur et augue vitae tincidunt. Etiam et magna felis. Integer mattis, nisi aliquet scelerisque blandit, ex mi sodales ante, eget accumsan quam magna et ligula. Curabitur id tristique leo. Proin rutrum mi vitae enim rhoncus, at cursus neque eleifend. Integer ultrices volutpat tellus ac porta. Fusce sollicitudin venenatis lacinia. Fusce ante lorem, gravida semper varius non, pharetra non erat. Sed dapibus arcu turpis, ac sollicitudin nibh lacinia vel. Nullam at enim porta, luctus metus sit amet, rutrum odio. Cras tempor enim vel pellentesque sollicitudin. Maecenas ullamcorper, sem non accumsan volutpat, neque tortor pulvinar orci, ut ultrices ligula lorem ut risus.</p>
                <p>Aliquam facilisis, nibh eget posuere suscipit, arcu sapien iaculis odio, in molestie dolor lectus vitae sem. Cras id nunc mollis mi rutrum dapibus. Quisque rutrum a augue at scelerisque. Praesent faucibus ac enim vitae gravida. Sed et sodales elit. Duis magna lectus, interdum sit amet metus a, sagittis varius magna. Proin nibh lectus, egestas a luctus ut, dapibus et enim. Curabitur fringilla ipsum vitae nunc imperdiet consectetur eget non neque. Suspendisse ultricies odio quis lorem vulputate, ac vulputate turpis feugiat. Maecenas posuere rhoncus orci, in ornare velit suscipit tempor. Curabitur pretium nisl id lorem placerat consequat. In quis quam eros. Nam mattis elit eu quam sagittis, in varius erat tempor.</p>
                <p>Fusce felis magna, pellentesque eget mollis a, rutrum id eros. Curabitur auctor varius arcu a consequat. Phasellus quis pulvinar enim, eu ultricies justo. Pellentesque risus libero, dapibus at erat ultricies, gravida varius erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla tempus, justo ut laoreet mollis, nunc tellus convallis urna, vel pretium dui velit eget ligula. Aliquam semper sed nulla a molestie. Maecenas at egestas massa, vitae aliquam mi. Fusce nec sem egestas, pretium lacus non, tincidunt sapien. Sed tristique odio at ultricies vulputate. Integer et convallis augue, eu aliquam enim. Mauris ut faucibus diam. Donec vulputate nunc sed congue accumsan. Etiam lobortis nisi quis lacinia pharetra.</p>
            </div>
        </div>
    </div>
    <div class="cell shrink footer" style="background-color:green">
        <h3>Here's my footer</h3>
    </div>
</div>



</body>


</html>

