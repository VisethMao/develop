<div class="col-sm-10">
                <div class="row">
                    <div class="mt-3 md-3">
                        <input type="text" placeholder="" class="form-control" required>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col sm-3">
                                <form action="" method="Post">
                                    <div class="mt-3 mb-3">
                                        <label class="text-danger">Customer Name:</label>
                                        <input type="text" placeholder="Customer Name" name="ctn" class="form-control" required>
                                    </div>
                                    <div class="mt-3 mb-3">
                                        <label class="text-danger">Quantity:</label>
                                        <input type="number" placeholder="Quanlity" name="qty" class="form-control" required>
                                    </div>
                                    <div class="mt-3 mb-3">
                                        <label class="text-danger">Order Product:</label>
                                        <select class="form-select" name="odp" required>
                                            <option value="Lactasoy">Lactasoy</option>
                                            <option value="Redbull">Redbull</option>
                                            <option value="Cocacola">Cocacola</option>
                                            <option value="Carabao">Carabao</option>
                                            <option value="fanta">fanta</option>
                                            <option value="Sting">Sting</option>
                                        </select>
                                    </div>
                                    <div class="mt-3 mb-3">
                                        <label class="text-danger">Order Date:</label>
                                        <input type="date" class="form-control" name="odd" required>
                                    </div>
                                    <div class="mt-3 mb-3">
                                        <label class="text-danger">Payment:</label>
                                        <select class="form-select" name="payment" required>
                                            <option value="NoPaid">NoPaid</option>
                                            <option value="Paid">Paid</option>
                                        </select>
                                    </div>
                                    <div class="mt-3 mb-3">
                                        <label class="text-danger">Delivery:</label>
                                        <input type="number" placeholder="Price Delivery" name="dly" class="form-control" required>
                                    </div>
                                    <div class="mt-3 mb-3">
                                        <button type="submit" class="btn bg-danger text-white" name="btnsave">
                                            Save
                                        </button>
                                        <button type="reset" class="btn bg-primary text-warning" name="btncancel" onclick="remove(this)">
                                            Cancel
                                        </button>
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col sm-3">
                                
                                    <div class="mt-3 mb-3">
                                        <label class="text-danger">Phone Number:</label>
                                        <input type="text" placeholder="Phone Number" name="phone" class="form-control" required>
                                    </div>
                                    <div class="mt-3 mb-3">
                                        <label class="text-danger">Price:</label>
                                        <input type="number" placeholder="Price" name="price" class="form-control" required>
                                    </div>

                                    <div class="mt-3 mb-3">
                                        <label class="text-danger">Location:</label>
                                        <input type="text" class="form-control" placeholder="Location" name="location" required>
                                    </div>

                                    <div class="mt-3 mb-3">
                                        <label class="text-danger">Take Date:</label>
                                        <input type="date" class="form-control" name="tkd" required>
                                    </div>
                                    <div class="mt-3 mb-3">
                                        <label class="text-danger">Sell:</label>
                                        <select class="form-select" name="sell" required>
                                            <option value="In Order">In Order</option>
                                            <option value="Sold Out">Sold Out</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>