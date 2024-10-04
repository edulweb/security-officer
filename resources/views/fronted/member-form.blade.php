
@extends('layouts.main')
@section('title', 'Join Us')
@section('mainContent')
<style>
    label.error{
        display: none !important;
        opacity: 0.0;
    }
</style>
        <!-- contact-style-two -->
        <section class="contact-style-two my-5">
            <div class="auto-container">
                <div class="content-column">
                    <div class="content_block_seven">
                        <div class="content-box">
                            <div class="sec-title mb_60">
                                <span class="sub-title">Join Us</span>
                                <h2>Member Joining Form</h2>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-column">
                    <div class="form-inner">
                        <form  id="contact-form" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <h5>Personal Details</h5>
                               </div>
                                <div class="col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" placeholder="First Name"  required>
                                        <label for="firstName">First Name*</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="lastName" placeholder="Password" required>
                                        <label for="lastName">Last Name*</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="contact" placeholder="Contact No"  required>
                                        <label for="contact">Contact No.*</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="email" placeholder="Password" required>
                                        <label for="email">Eamil Id*</label>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <h5>Professional Details</h5>
                               </div>
                                <div class="col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="agency" placeholder="Agency" required>
                                        <label for="agency">Which Agency do you work for?*</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="taxId" placeholder="Tax Id">
                                        <label for="taxId">Tax ID</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="position" placeholder="Rank/Position" required>
                                        <label for="position">Position in your agency?*</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div><label for="">Pick One*</label></div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                                        <label class="form-check-label" for="inlineRadio1">Uniformed</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                                        <label class="form-check-label" for="inlineRadio2">Civilian</label>
                                      </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Comments</label>
                                      </div>
                                </div>
                                <div class="col-12 mb-2">
                                     <h5>Communication Address</h5>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" required></textarea>
                                        <label for="floatingTextarea2">Building/Street*</label>
                                      </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" required></textarea>
                                        <label for="floatingTextarea2">Locality/Landmark*</label>
                                      </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="city" placeholder="Rank/Position" required>
                                        <label for="city">City*</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="pincode" placeholder="Rank/Position" required>
                                        <label for="pincode">Pincode*</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="state" placeholder="Rank/Position" required>
                                        <label for="state">State*</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="city" placeholder="Rank/Position" required>
                                        <label for="city">Country*</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn btn-one" type="submit" name="submit-form">Contact With Us</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->
@endSection
@section('script')
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')
  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }else{
        event.preventDefault();
        alert('Form Has Been Submited');
        $('#contact-form')[0].reset();
      }

      form.classList.add('was-validated')
    }, false)
  })
})();
</script>
@endSection
