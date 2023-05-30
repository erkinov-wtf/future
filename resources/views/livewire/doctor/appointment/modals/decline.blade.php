<div class="modal fade" id="cancelappointment" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body py-5">
                <div class="text-center">
                    <div
                        class="icon d-flex align-items-center justify-content-center bg-soft-danger rounded-circle mx-auto"
                        style="height: 95px; width:95px;">
                        <i class="uil uil-times-circle h1 mb-0"></i>
                    </div>
                    <div class="mt-4">
                        <h4>Cancel Appointment</h4>
                        <p class="para-desc mx-auto text-muted mb-0">Great doctor if you need your family member
                            to get immediate assistance, emergency treatment.</p>
                        <div class="mt-4">
                            <button wire:click.prevent="declineAppointment({{ $item->id }})" class="btn btn-soft-danger">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
