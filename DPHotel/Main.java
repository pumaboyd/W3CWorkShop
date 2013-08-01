public static class Main(){
	IOTAHotelListService serviceList = BeanFactory("OTAHotelListServiceImpl");

	int shopID;

	for(OTAEnum ota : OTAEnum.values()){

        IOTAHotelService hotelService = serviceList.getOTAHotelService(ota.vlaue);
        hotelService.loadHotelLowPrice(shopID);
    }

    IOTAHotelService ota = serviceList.getOTAHotelService(Enum)
    


}