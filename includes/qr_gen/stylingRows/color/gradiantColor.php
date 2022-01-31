<div class="row align-items-center">
    <div class="col-lg-2">
        <div class="label font-weight-bold">Color</div>
    </div>
    <div class="col-lg-3 px-1">
        <div class="my-3 m-0 d-flex flex-column align-items-center justify-content-center flex-wrap">
        <div class="d-flex align-items-center">
            <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center flex-wrap">
            <div class="input input-checkbox d-flex align-items-center justify-content-center">
                <input type="color" class="gradiantColorOne">
                <label class="gradiantColorOne-label px-4"></label>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div @click="swapColors('color')" class="col-lg-1 d-flex justify-content-center">
        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.541 6.68665L21.2481 7.39375L21.9552 6.68665L21.2481 5.97954L20.541 6.68665ZM4.54102 11.6866C4.54102 12.2389 4.98873 12.6866 5.54102 12.6866C6.0933 12.6866 6.54102 12.2389 6.54102 11.6866H4.54102ZM17.2481 11.3938L21.2481 7.39375L19.8339 5.97954L15.8339 9.97954L17.2481 11.3938ZM21.2481 5.97954L17.2481 1.97954L15.8339 3.39375L19.8339 7.39375L21.2481 5.97954ZM20.541 5.68665H9.54102V7.68665H20.541V5.68665ZM4.54102 10.6866V11.6866H6.54102V10.6866H4.54102ZM9.54102 5.68665C6.77959 5.68665 4.54102 7.92522 4.54102 10.6866H6.54102C6.54102 9.02979 7.88416 7.68665 9.54102 7.68665V5.68665Z" fill="#CCD2E3"/>
        <path d="M4.54102 18.6866L3.83391 17.9795L3.1268 18.6866L3.83391 19.3938L4.54102 18.6866ZM20.541 13.6866C20.541 13.1344 20.0933 12.6866 19.541 12.6866C18.9887 12.6866 18.541 13.1344 18.541 13.6866H20.541ZM7.83391 13.9795L3.83391 17.9795L5.24812 19.3938L9.24812 15.3938L7.83391 13.9795ZM3.83391 19.3938L7.83391 23.3938L9.24812 21.9795L5.24812 17.9795L3.83391 19.3938ZM4.54102 19.6866H15.541V17.6866H4.54102V19.6866ZM20.541 14.6866V13.6866H18.541V14.6866H20.541ZM15.541 19.6866C18.3024 19.6866 20.541 17.4481 20.541 14.6866H18.541C18.541 16.3435 17.1979 17.6866 15.541 17.6866V19.6866Z" fill="#CCD2E3"/>
        </svg>
        
    </div>
    <div class="col-lg-3 px-1">          
        <div class="my-3 m-0 d-flex flex-column align-items-center justify-content-center flex-wrap">
        <div class="d-flex align-items-center">
            <div class="form-group my-3 m-0 d-flex flex-column align-items-center justify-content-center flex-wrap">
            <div class="input input-checkbox d-flex align-items-center justify-content-center">
                <input type="color" class="gradiantColorTwo">
                <label class="gradiantColorTwo-label px-4"></label>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="select py-3 px-1">
        <select @change="updateQrCode" v-model="qrCodeState.dotColorGradiantType" class="downloadFormat">
            <option value="linear" selected>Linear Gradient</option>
            <option value="radial" selected>Radial Gradient</option>
        </select>
        </div>
    </div>
</div>