@extends('layouts.personal')

    @section('meta')
        <title>My Settings | Complete Choice</title>
        <meta name="description" content="Workday my settings">
    @endsection

    @section('styles')
        <script>var admin = false;</script>
    @endsection

    @section('content')
	
		<html>
<head>
<style>

.container {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 400%; /* 16:9 Aspect Ratio */
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}


</style>
</head>
<body>




</body>
</html>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">{{ __("General Settings") }}</h2>
            </div>    
        </div>

        <div class="row">
            <div class="col-md-12">

            <div class="box box-success">
                <div class="box-body">
                    <div class="ui secondary blue pointing tabular menu">
                        <a class="item active" data-tab="about">{{ __("Case Note") }}</a>
                        <a class="item" data-tab="attribution">{{ __("Incident Report") }}</a>
						
                    </div>
                    <div class="ui tab active" data-tab="about">
                        <div class="col-md-12">
                            <div class="tab-content">
							<div class="container">
							<div class="responsive-iframe">
                                <p class="license col-md-6" style="margin-bottom:0">
                                  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSflaehzMIpgtM6uD6GX1tNM_RgidwqeFsjjwWIVWjr-3ha9CQ/viewform?embedded=true" width="640" height="1002" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                                
                            </div>
							 </div>
							 </div>
                        </div>
                    </div>

                    <div class="ui tab" data-tab="attribution">
                        <div class="tab-content">
                            <h3 class="ui header">Legal Notice
                            <div class="sub header">Copyright (c) 2020 Brian Luna. All rights reserved.</div>
                        </h3>
                        <h5 class="ui header">Laravel
                            <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright (c) Taylor Otwell
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>
                        <h5 class="ui header">Bootstrap
                            <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright 2011-2018 Twitter, Inc.
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>
                        <h5 class="ui header">Semantic UI
                            <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright (c) 2015 Semantic Org
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
                            SOFTWARE.
                        </p>
                        <h5 class="ui header">jQuery JavaScript Library
                            <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright jQuery Foundation and other contributors
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>
                        <h5 class="ui header">DataTables
                            <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright 2008-2018 SpryMedia Ltd
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>
                        <h5 class="ui header">Chart.js
                            <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright 2018 Chart.js Contributors
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">Moment.js
                            <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright (c) JS Foundation and other contributors
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">Air Datepicker
                            <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright (c) 2016 Timofey Marochkin
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>
                        <h5 class="ui header">MDTimePicker
                            <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright (c) 2017 Dionlee Uy
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    @endsection
    
    @section('scripts')
    <script type="text/javascript">
        $('.menu .item').tab();
    </script>
    @endsection 