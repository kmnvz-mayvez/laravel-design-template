<section class="d-flex flex-column justify-content-center" id="rsvp">
    <div class="container-sm d-flex flex-column p-4" style="position: absolute;" id="form-undangan">
        <h2 data-aos="fade-in" class="text-center mt-1">RSVP</h2>
        <h6 class="p-1"><strong>Mohon disini untuk data kehadiranya Bapak dan Ibu berserta kerluarga</strong></h6>
        <div class="mb-1">
            <input type="text" class="form-control shadow-sm" id="formnama" placeholder="Isikan Nama Anda">
        </div>
        <div class="mb-1">
            <input type="email" class="form-control shadow-sm" id="formemail" placeholder="Email Anda">
        </div>
        <div class="mb-1">
            <div class="form-group">
                <input type="number" class="form-control shadow-sm" id="amount" name="amount" placeholder="Jumlah Keluarga" min="1" required>
            </div>
        </div>
        <div class="mb-1">
            <div class="card-body">
                <form>
                    <div class="mb-2">
                        <select id="attend" name="attend" class="form-select" required>
                            <option disabled selected>Kehadiran</option>
                            <option value="yes">Hadir</option>
                            <option value="no">Tidak Hadir</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-2" style="display: contents;">
            <input type="submit" value="Submit RSVP" class="btn btn-primary btn-sm rounded-4 shadow">
        </div>
    </div>
</section>