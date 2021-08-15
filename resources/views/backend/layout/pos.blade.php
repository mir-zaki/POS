@extends('backend.master')
@section('content')
<div class="col-md-12">
  <div class="row">
    <div class="col-md-5">
      <div class="card card-body">
        <form id="scan_code" action="https://pos.softghor.com/back/product-scan" method="POST">
          <input type="hidden" name="_token" value="yonJSePkslPxQvRJAPPzbM0V2niGT6ZpSKPFKuJ4">          <div class="form-row mb-3">
            <div class="input-group col-md-12">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-barcode"></i>
              </span>
              <input type="text" id="id_code" class="form-control" placeholder="Scan Barcode" name="code" />
            </div>
          </div>
        </form>

        <div class="form-row mb-3">
          <div class="col-md-12">
            <input type="text" id="product_search" class="form-control" placeholder="Start to write product name..."
              name="p_name" />
            <input type="hidden" id="search_product_id">

          </div>
        </div>

        <form action="https://pos.softghor.com/back/pos" id="order-form" method="POST">
          <input type="hidden" name="_token" value="yonJSePkslPxQvRJAPPzbM0V2niGT6ZpSKPFKuJ4">          <div class="form-row">
            <input type="text" data-provide="datepicker" data-date-today-highlight="true" data-date-format="yyyy-mm-dd"
              class="form-control" name="sale_date" value="2021-07-19">
          </div>
          <div class="form-row mt-4">
            <div class="form-group col-9">
              <select name="customer" id="customer" class="form-control" data-provide="selectpicker"
                data-live-search="true">
                <option value="0">Walk-in Customer</option>
                                <option value="23">Sahed - 64565454656</option>
                                <option value="22">Salek Basunia - 01761342166</option>
                                <option value="21">Sayed - 0555</option>
                                <option value="20">digital - 0171</option>
                                <option value="19">tamai - 01911000001</option>
                                <option value="18">Sazzadur Rahman - 01911198562</option>
                                <option value="17">Babu - 01920042000</option>
                                <option value="16">M - 01744490900</option>
                                <option value="15">Shakib - 017797243801</option>
                                <option value="14">Rahim - 01814949713</option>
                                <option value="13">rAHIM - 01768390131</option>
                                <option value="12">TAHMID - 01975888811</option>
                                <option value="11">MD OMAR FARUK - 01717445055</option>
                                <option value="10">Md. Muslim Uddin - 01719863719</option>
                                <option value="9">sakib - 01779724380</option>
                                <option value="8">sobuj - 12133144</option>
                                <option value="7">nadim - 123654789</option>
                                <option value="6">SDSD - 123154546</option>
                                <option value="5">MASUD - 01975888810</option>
                                <option value="1">Sakib Rabby - 0184578745</option>
                                <option value="2">Md Juwel Khan - 01845784545</option>
                                <option value="3">Md Sumon - 01847898745</option>
                                <option value="4">Mahmudul Hasan - 0198784545</option>
                              </select>
            </div>

            <div class="col-3">
              
              <a href="https://pos.softghor.com/back/pos/add_customer" class="edit btn btn-primary" data-toggle="modal" data-target="#edit" id="Add Customer">
                  
                  Add
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 mt-4">
              <table class="table table-bordered">
                <thead class="bg-primary"> 
                  <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Sub T</th>
                    <th>
                      <a href="#" id="clearList">
                        <i class="fa fa-trash"></i>
                      </a>
                    </th>
                  </tr>
                </thead>
                <tbody id="tbody"></tbody>
                <tfoot class="bg-danger">
                  <tr>
                    <th class="text-center" colspan="2">Total Qty: <strong id="totalQty"></strong> </th>
                    <th class="text-center" colspan="3">Total: <strong id="totalAmount"></strong> Tk</th>
                  </tr>
                </tfoot>
              </table>

              <div class="form-gorup text-center">
                <button type="button" id="payment-btn" class="btn btn-primary">
                  <i class="fa fa-money"></i>
                  Payment
                </button>
                              </div>
              
              <div class="modal fade" id="payment-modal" tabindex="-1">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Payment</h4>
                      <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered text-left">
                        <tr>
                          <td width="50%">
                            <strong class="float-left">Paying Items: </strong>
                            <strong class="float-right">(<span id="items">0</span>)</strong>
                          </td>
                          <td>
                            <strong class="float-left">Total Receivable: </strong>
                            <strong class="float-right">(<span id="receivable">0</span> Tk)</strong>
                            <input type="hidden" name="receivable_amount" id="receivable_input">
                          </td>
                        </tr>
                        <tr>
                          <td width="50%">
                            <strong class="float-left">After Discount : </strong>
                            <strong class="float-right"> (<span id="after_discount">0</span> Tk)</strong>
                          </td>
                          <td>
                            <strong class="float-left">Balance </strong>
                            <strong class="float-right"> (<span id="balance">0</span> Tk)</strong>
                            <input type="hidden" name="balance" id="balance_input">
                          </td>
                        </tr>

                        

                      </table>
                      <hr>


                      

                      



                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="discount">Discount</label>
                          <input type="text" class="form-control" id="discount" name="discount" placeholder="0%">

                        </div>
                        <div class="form-group col-md-6">
                          <label for="payment_method">Note</label>
                          <textarea name="note" class="form-control"></textarea>
                        </div>
                      </div>
                      <hr>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="payment_method">Payment Method</label>
                          <select name="payment_method" id="" class="form-control">
                                                          <option value="1" >Hand Cash</option>
                                                          <option value="2" >Bank</option>
                                                          <option value="3" >Rocket</option>
                                                          <option value="4" >Bkash</option>
                                                          <option value="5" >Cash On Delivery</option>
                                                      </select>
                        </div>

                        

                        <div class="form-group col-md-6">
                          <label for="pay_amount">Pay Amount</label>
                          <div class="input-group">
                            <input type="number" step="any" class="form-control" name="pay_amount" id="pay_amount"
                              placeholder="Pay Amount...">
                            <span class="input-group-btn">
                              <button class="btn btn-warning" type="button" id="paid_btn">PAID!</button>
                            </span>
                          </div>
                        </div>
                      </div>
                      <hr>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-bold btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-bold btn-primary" id="order-btn">
                        <i class="fa fa-shopping-cart"></i>
                        Order
                      </button>
                    </div>
                  </div>
                </div>
              </div>
        </form>
        @endsection