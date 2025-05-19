@include('layouts.upnl.header')

  <div class="dashboard-body">

                    <div class="container-fluid">
                        <div class="flex-between mb-32 gap-3">
                            <h2 class="fs-30">Open Ticket</h2>
                            <div class="flex-align gap-2">
                                <a href="#"
                                    class="btn btn--sm btn--base mb-2">My Support Ticket</a>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-4">
                            <div class="col-md-12">
                                <div class="card custom--card">
                                    <div class="card-body">
                                          <form action="https://script.viserlab.com/viserasset/ticket/create"
                                            class="disableSubmission" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="_token"
                                                value="wQAMB8LqAZT4SPIOLVY6kKpuDYUltnNJPNvTVECF" autocomplete="off">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="form--label">Subject</label>
                                                    <input type="text" name="subject" value=""
                                                        class="form-control form--control md-style" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form--label">Priority</label>
                                                    <select name="priority"
                                                        class="form-select md-style form--control select2"
                                                        data-minimum-results-for-search="-1" required>
                                                        <option value="3">High</option>
                                                        <option value="2">Medium</option>
                                                        <option value="1">Low</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 form-group">
                                                    <label class="form--label">Message</label>
                                                    <textarea name="message" id="inputMessage" rows="6"
                                                        class="form-control form--control" required></textarea>
                                                </div>


                                                <div class="col-md-9">
                                                    <button type="button"
                                                        class="btn btn-dark btn--sm addAttachment my-2"> <i
                                                            class="fas fa-plus"></i> Add Attachment </button>
                                                    <p class="mb-2"><span class="text--info">Max 5 files can be uploaded
                                                            | Maximum upload size is 128MB | Allowed File Extensions:
                                                            .jpg, .jpeg, .png, .pdf, .doc, .docx</span></p>
                                                    <div class="row fileUploadsContainer">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="btn btn--base btn--md  w-100 my-2" type="submit"><i
                                                            class="las la-paper-plane"></i> Submit </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
@include('layouts.upnl.footer')