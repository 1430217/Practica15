@extends('template')
@section('content-inner')

<div class="container-fluid">
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Tabla 1</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index"><i class="ti ti-home"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Default</h4>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Country</th>
                                    <th>Ship Date</th>
                                    <th><span style="width:100px;">Status</span></th>
                                    <th>Order Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="text-primary">054-01-FR</span></td>
                                    <td>Lori Baker</td>
                                    <td>US</td>
                                    <td>10/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$139.45</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">021-12-US</span></td>
                                    <td>Lawrence Crawford</td>
                                    <td>FR</td>
                                    <td>10/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$189.00</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">189-01-RU</span></td>
                                    <td>Samuel Walker</td>
                                    <td>AU</td>
                                    <td>08/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Failed</span></span></td>
                                    <td>$107.55</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">092-06-FR</span></td>
                                    <td>Angela Walters</td>
                                    <td>US</td>
                                    <td>08/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small success">Delivered</span></span></td>
                                    <td>$129.85</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">021-09-US</span></td>
                                    <td>Ryan Hanson</td>
                                    <td>ES</td>
                                    <td>07/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$199.95</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">054-01-FR</span></td>
                                    <td>Evelyn Black</td>
                                    <td>FR</td>
                                    <td>10/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$139.45</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">021-12-US</span></td>
                                    <td>James Morris</td>
                                    <td>EN</td>
                                    <td>10/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small info">Paid</span></span></td>
                                    <td>$189.00</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">189-01-RU</span></td>
                                    <td>Valentin H.</td>
                                    <td>AU</td>
                                    <td>08/21/2017</td>
                                    <td><span style="width:100px;"><span class="badge-text badge-text-small danger">Failed</span></span></td>
                                    <td>$107.55</td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
    
    

@endsection
