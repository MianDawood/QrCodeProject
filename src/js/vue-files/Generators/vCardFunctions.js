import vCardJS from "vcards-js"
import { vCardForm, qrData } from "../objects";

const vCard = vCardJS();

export const vCardGenerator = () => {
    vCard.firstName = vCardForm.firstName;
    vCard.lastName = vCardForm.lastName;
    vCard.workPhone = vCardForm.phoneNumber;
    vCard.homePhone = vCardForm.landLine;
    vCard.email = vCardForm.email;
    vCard.organization = vCardForm.orginizationName;
    vCard.role = vCardForm.jobTitle;
    vCard.homeAddress.countryRegion = vCardForm.country;
    vCard.homeAddress.stateProvince = vCardForm.state;
    vCard.homeAddress.city = vCardForm.city;
    vCard.homeAddress.postalCode = vCardForm.zipcode;
    vCard.homeAddress.street = vCardForm.street;
    vCard.note = vCardForm.summery;    

    qrData.data = vCard.getFormattedString();
}




