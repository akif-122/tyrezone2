@extends('admin.layout.main')

@section('maincontent')
    <div class="content-area mt-5">


        <div class="row dashboard">

            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="{{ route("admin.products") }}">
                    <div class="dash-card">
                        <h4>Products</h4>
                        <h5>{{ $products->count() }}</h5>
                        <i class="fa-solid fa-box-archive"></i>
                    </div>
                </a>
            </div>

            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="{{ route("admin.tyrePatteren") }}">
                    <div class="dash-card">
                        <h4>Patteren</h4>
                        <h5>{{ $patterens->count() }}</h5>
                        <i class="fa-solid fa-sliders"></i>
                    </div>
                </a>

            </div>

            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="{{ route("admin.manufacturers") }}">
                    <div class="dash-card">
                        <h4>Manufacturers</h4>
                        <h5>{{ $manufacturers->count() }}</h5>
                        <i class="fa-solid fa-list"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="{{ route("admin.users") }}">
                    <div class="dash-card">
                        <h4>Users</h4>
                        <h5>{{ $users->count() }}</h5>
                        <i class="fa-solid fa-users"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                <a href="{{ route("admin.orders") }}">
                    <div class="dash-card">
                        <h4>Orders</h4>
                        <h5>{{ $orders->count() }}</h5>
                        <i class="fa-solid fa-cart-flatbed"></i>
                    </div>
                </a>
            </div>
        </div>


        <div class="row mb-5 mt-5">
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Manufacturers</h5>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Manufacturer Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Created At</th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Accelera</td>
                                <td></td>
                                <td>


                                </td>

                                <!-- Truncate to 50 characters -->
                                <td>2024-08-11 03:50:29</td>
                            </tr>
                            <tr>
                                <td>Apollo</td>
                                <td></td>
                                <td>


                                </td>

                                <!-- Truncate to 50 characters -->
                                <td>2024-08-11 03:50:49</td>
                            </tr>
                            <tr>
                                <td>Dunlop</td>
                                <td></td>
                                <td>


                                </td>

                                <!-- Truncate to 50 characters -->
                                <td>2024-08-11 03:51:06</td>
                            </tr>
                            <tr>
                                <td>Bfgoodrich</td>
                                <td></td>
                                <td>


                                </td>

                                <!-- Truncate to 50 characters -->
                                <td>2024-08-11 03:51:54</td>
                            </tr>
                            <tr>
                                <td>BLACKARROW</td>
                                <td></td>
                                <td>


                                </td>

                                <!-- Truncate to 50 characters -->
                                <td>2024-08-11 03:52:04</td>
                            </tr>
                            <tr>
                                <td>Bridgestone</td>
                                <td></td>
                                <td>

                                    We, at TYRE ZONE TYRES LTD, serve as retailers of Bridgestone tyres. We,
                                    keeping in tune with our co...
                                </td>

                                <!-- Truncate to 50 characters -->
                                <td>2024-08-11 03:52:17</td>
                            </tr>
                            <tr>
                                <td>CHURCHILL</td>
                                <td></td>
                                <td>


                                </td>

                                <!-- Truncate to 50 characters -->
                                <td>2024-08-11 03:52:28</td>
                            </tr>
                            <tr>
                                <td>COMFORSER</td>
                                <td></td>
                                <td>


                                </td>

                                <!-- Truncate to 50 characters -->
                                <td>2024-08-11 03:52:43</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Tyre Pattern</h5>


                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Patteren Name</th>
                                <th>manufacture</th>
                                <th>Created At</th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Accelera</td>
                                <td>ECO PLUSH</td>
                                <td>2024-08-11 03:53:13</td>
                            </tr>
                            <tr>
                                <td>Accelera</td>
                                <td>Iota ST68</td>
                                <td>2024-08-11 03:53:25</td>
                            </tr>
                            <tr>
                                <td>Apollo</td>
                                <td>EnduRace R Front HD</td>
                                <td>2024-08-11 03:54:03</td>
                            </tr>
                            <tr>
                                <td>Apollo</td>
                                <td>EnduRace RA</td>
                                <td>2024-08-11 03:54:40</td>
                            </tr>
                            <tr>
                                <td>Avon</td>
                                <td>AS12 All Season Van</td>
                                <td>2024-08-11 03:55:12</td>
                            </tr>
                            <tr>
                                <td>Avon</td>
                                <td>AS12ON VAN</td>
                                <td>2024-08-11 03:55:24</td>
                            </tr>
                            <tr>
                                <td>Dunlop</td>
                                <td>Econo Drive</td>
                                <td>2024-08-11 03:55:47</td>
                            </tr>
                            <tr>
                                <td>Dunlop</td>
                                <td>Econodrive LT</td>
                                <td>2024-08-11 03:55:57</td>
                            </tr>
                            <tr>
                                <td>Dunlop</td>
                                <td>FASTRESPONSE</td>
                                <td>2024-08-11 03:56:08</td>
                            </tr>
                            <tr>
                                <td>Bfgoodrich</td>
                                <td>All Terrain TA KO2</td>
                                <td>2024-08-11 03:57:31</td>
                            </tr>
                            <tr>
                                <td>Bfgoodrich</td>
                                <td>Trail Terrain TA</td>
                                <td>2024-08-11 03:57:41</td>
                            </tr>
                            <tr>
                                <td>BLACKARROW</td>
                                <td>P03</td>
                                <td>2024-08-11 03:58:09</td>
                            </tr>
                            <tr>
                                <td>BLACKARROW</td>
                                <td>P09</td>
                                <td>2024-08-11 03:58:17</td>
                            </tr>
                            <tr>
                                <td>Bridgestone</td>
                                <td>A005 EVO</td>
                                <td>2024-08-11 03:58:44</td>
                            </tr>
                            <tr>
                                <td>Bridgestone</td>
                                <td>A005 Weather Control</td>
                                <td>2024-08-11 03:58:52</td>
                            </tr>
                            <tr>
                                <td>CHURCHILL</td>
                                <td>All Terrain</td>
                                <td>2024-08-11 03:59:20</td>
                            </tr>
                            <tr>
                                <td>CHURCHILL</td>
                                <td>CSB007</td>
                                <td>2024-08-11 03:59:32</td>
                            </tr>
                            <tr>
                                <td>COMFORSER</td>
                                <td>UHP Series CF710</td>
                                <td>2024-08-11 03:59:53</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-between align-items-center">
            <h5 class="m-0">Products</h5>


        </div>


        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tyre Name</th>
                        <th>Image</th>
                        <th>Manufac. Name</th>
                        <th>Tyre Patteren</th>
                        <th>fuel Effic.</th>
                        <th>Wet Grip</th>
                        <th>Road Noise</th>
                        <th>Size</th>
                        <th>Price</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>ECO PLUSH</td>
                        <td>
                            <img src="https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/tyresoft_uk/accecoplush.jpg?v=10.2"
                                alt="">
                        </td>
                        <td>Accelera</td>
                        <td>ECO PLUSH</td>
                        <td>D</td>
                        <td>C</td>
                        <td>68</td>
                        <td>215/65 R15 100H</td>

                        <td>$82.74</td>

                    </tr>
                    <tr>
                        <td>IOTA ST68</td>
                        <td>
                            <img src="https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/tyresoft_uk/iotast-68.jpg?v=10.2"
                                alt="">
                        </td>
                        <td>Accelera</td>
                        <td>Iota ST68</td>
                        <td>C</td>
                        <td>C</td>
                        <td>68</td>
                        <td>225/55 R18 98V</td>

                        <td>$100.94</td>

                    </tr>
                    <tr>
                        <td>EnduRace R Front HD</td>
                        <td>
                            <img src="https://www.xpress-tyres.co.uk/assets/images/placeholder.png" alt="">
                        </td>
                        <td>Apollo</td>
                        <td>ECO PLUSH</td>
                        <td>C</td>
                        <td>B</td>
                        <td>73</td>
                        <td>385/65 R22 164K</td>

                        <td>$404.00</td>

                    </tr>
                    <tr>
                        <td>EnduRace RA</td>
                        <td>
                            <img src="https://www.xpress-tyres.co.uk/assets/images/placeholder.png" alt="">
                        </td>
                        <td>Apollo</td>
                        <td>EnduRace R Front HD</td>
                        <td>D</td>
                        <td>B</td>
                        <td>71</td>
                        <td>235/75 R17 132M</td>

                        <td>$167.00</td>

                    </tr>
                    <tr>
                        <td>Econo Drive</td>
                        <td>
                            <img src="https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/Dunlop/econodrive.jpg?v=10.2"
                                alt="">
                        </td>
                        <td>Dunlop</td>
                        <td>Econo Drive</td>
                        <td>C</td>
                        <td>B</td>
                        <td>72</td>
                        <td>195/70 R15 104S</td>

                        <td>$125.82</td>

                    </tr>
                    <tr>
                        <td>Econodrive LT</td>
                        <td>
                            <img src="https://www.xpress-tyres.co.uk/assets/images/placeholder.png" alt="">
                        </td>
                        <td>Dunlop</td>
                        <td>Econodrive LT</td>
                        <td>C</td>
                        <td>B</td>
                        <td>72</td>
                        <td>215/60 R17 109T</td>

                        <td>$169.52</td>

                    </tr>
                    <tr>
                        <td>SP Sport FastResponse</td>
                        <td>
                            <img src="https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/other_images/3188649811151.jpg?v=10.2"
                                alt="">
                        </td>
                        <td>Dunlop</td>
                        <td>FASTRESPONSE</td>
                        <td>C</td>
                        <td>B</td>
                        <td>70</td>
                        <td>175/65 R15 84H</td>

                        <td>$94.60</td>

                    </tr>
                    <tr>
                        <td>SP Sport FastResponse</td>
                        <td>
                            <img src="https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/other_images/3188649811151.jpg?v=10.2"
                                alt="">
                        </td>
                        <td>Dunlop</td>
                        <td>ECO PLUSH</td>
                        <td>D</td>
                        <td>B</td>
                        <td>70</td>
                        <td>185/55 R16 83V</td>

                        <td>$130.37</td>

                    </tr>
                    <tr>
                        <td>All Terrain TA KO2</td>
                        <td>
                            <img src="https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/tyre_energy/pic_12125g.jpg?v=10.2"
                                alt="">
                        </td>
                        <td>Bfgoodrich</td>
                        <td>All Terrain TA KO2</td>
                        <td>E</td>
                        <td>B</td>
                        <td>74</td>
                        <td>225/70 R16 102R</td>

                        <td>$201.76</td>

                    </tr>
                    <tr>
                        <td>All Terrain TA KO2</td>
                        <td>
                            <img src="https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/tyresoft_uk/all_terrain_t-a_ko2.png?v=10.2"
                                alt="">
                        </td>
                        <td>Bfgoodrich</td>
                        <td>All Terrain TA KO2</td>
                        <td>E</td>
                        <td>B</td>
                        <td>74</td>
                        <td>215/70 R16 100R</td>

                        <td>$202.72</td>

                    </tr>
                    <tr>
                        <td>Trail Terrain TA</td>
                        <td>
                            <img src="https://www.xpress-tyres.co.uk/assets/images/placeholder.png" alt="">
                        </td>
                        <td>Bfgoodrich</td>
                        <td>ECO PLUSH</td>
                        <td>D</td>
                        <td>E</td>
                        <td>72</td>
                        <td>255/55 R19 111H</td>

                        <td>$214.30</td>

                    </tr>
                    <tr>
                        <td>Trail Terrain TA</td>
                        <td>
                            <img src="https://www.xpress-tyres.co.uk/assets/images/placeholder.png" alt="">
                        </td>
                        <td>Accelera</td>
                        <td>ECO PLUSH</td>
                        <td>D</td>
                        <td>E</td>
                        <td>73</td>
                        <td>285/45 R22 114H</td>

                        <td>$327.94</td>

                    </tr>
                    <tr>
                        <td>P03</td>
                        <td>
                            <img src="https://www.xpress-tyres.co.uk/assets/images/placeholder.png" alt="">
                        </td>
                        <td>BLACKARROW</td>
                        <td>P03</td>
                        <td>C</td>
                        <td>C</td>
                        <td>69</td>
                        <td>165/50 R15 73V</td>

                        <td>$68.13</td>

                    </tr>
                    <tr>
                        <td>P03</td>
                        <td>
                            <img src="https://www.xpress-tyres.co.uk/assets/images/placeholder.png" alt="">
                        </td>
                        <td>BLACKARROW</td>
                        <td>ECO PLUSH</td>
                        <td>C</td>
                        <td>C</td>
                        <td>69</td>
                        <td>205/55 R16 91W</td>

                        <td>$68.68</td>

                    </tr>
                    <tr>
                        <td>P09</td>
                        <td>
                            <img src="https://www.xpress-tyres.co.uk/assets/images/placeholder.png" alt="">
                        </td>
                        <td>BLACKARROW</td>
                        <td>P09</td>
                        <td>D</td>
                        <td>C</td>
                        <td>70</td>
                        <td>185/60 R14 82H</td>

                        <td>$66.88</td>

                    </tr>
                    <tr>
                        <td>A005 EVO</td>
                        <td>
                            <img src="https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/other_images/3286341939316.png?v=10.2"
                                alt="">
                        </td>
                        <td>Bridgestone</td>
                        <td>A005 EVO</td>
                        <td>C</td>
                        <td>A</td>
                        <td>71</td>
                        <td>195/65 R15 95V</td>

                        <td>$101.02</td>

                    </tr>
                    <tr>
                        <td>A005 EVO</td>
                        <td>
                            <img src="https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/cloudfront/a005weathercontrolevo_a005_weather_cont.png?v=10.2"
                                alt="">
                        </td>
                        <td>Bridgestone</td>
                        <td>A005 EVO</td>
                        <td>C</td>
                        <td>A</td>
                        <td>71</td>
                        <td>235/40 R18 95W</td>

                        <td>$152.62</td>

                    </tr>
                    <tr>
                        <td>A005 Weather Control</td>
                        <td>
                            <img src="https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/other_images/3286341939118.png?v=10.2"
                                alt="">
                        </td>
                        <td>Bridgestone</td>
                        <td>A005 Weather Control</td>
                        <td>C</td>
                        <td>A</td>
                        <td>71</td>
                        <td>195/65 R15 91H</td>

                        <td>$97.36</td>

                    </tr>
                    <tr>
                        <td>A005 Weather Control</td>
                        <td>
                            <img src="https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/other_images/3286341939316.png?v=10.2"
                                alt="">
                        </td>
                        <td>Bridgestone</td>
                        <td>A005 Weather Control</td>
                        <td>C</td>
                        <td>A</td>
                        <td>71</td>
                        <td>195/65 R15 95V</td>

                        <td>$100.96</td>

                    </tr>
                    <tr>
                        <td>A005 Weather Control</td>
                        <td>
                            <img src="https://d2zcaovilvu9ff.cloudfront.net/images/tyre_catalog/Bridgestone/a005evo.jpg?v=10.2"
                                alt="">
                        </td>
                        <td>Bridgestone</td>
                        <td>A005 Weather Control</td>
                        <td>C</td>
                        <td>A</td>
                        <td>71</td>
                        <td>195/50 R15 82V</td>

                        <td>$105.70</td>

                    </tr>
                    <tr>
                        <td>All Terrain</td>
                        <td>
                            <img src="https://www.xpress-tyres.co.uk/assets/images/placeholder.png" alt="">
                        </td>
                        <td>Accelera</td>
                        <td>ECO PLUSH</td>
                        <td>D</td>
                        <td>D</td>
                        <td>72</td>
                        <td>235/70 R16 106T</td>

                        <td>$102.04</td>

                    </tr>
                    <tr>
                        <td>All Terrain</td>
                        <td>
                            <img src="https://www.xpress-tyres.co.uk/assets/images/placeholder.png" alt="">
                        </td>
                        <td>CHURCHILL</td>
                        <td>All Terrain</td>
                        <td>C</td>
                        <td>D</td>
                        <td>72</td>
                        <td>245/65 R17 111H</td>

                        <td>$103.86</td>

                    </tr>
                    <tr>
                        <td>All Terrain</td>
                        <td>
                            <img src="https://www.xpress-tyres.co.uk/assets/images/placeholder.png" alt="">
                        </td>
                        <td>CHURCHILL</td>
                        <td>All Terrain</td>
                        <td>C</td>
                        <td>B</td>
                        <td>72</td>
                        <td>205/80 R16 110S</td>

                        <td>$107.08</td>

                    </tr>
                    <tr>
                        <td>UHP Series CF710</td>
                        <td>
                            <img src="https://www.xpress-tyres.co.uk/assets/images/placeholder.png" alt="">
                        </td>
                        <td>COMFORSER</td>
                        <td>UHP Series CF710</td>
                        <td>E</td>
                        <td>B</td>
                        <td>69</td>
                        <td>205/40 R18 86W</td>

                        <td>$96.96</td>

                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
