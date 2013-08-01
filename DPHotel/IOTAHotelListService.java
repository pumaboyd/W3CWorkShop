public interface IOTAHotelListService {
	
	public int loadHotelLowPrice(int shopID,OTAEnum... otaType);
	public List<OTAHotel> loadOTAHotelList(int shopID);
	public OTAHotal loadOTAHotel(int shopID,OTAEnum otaType);
	public OTAHotal loadOTAHotelSDK(int shopID,OTAEnum otaType);
	public int updateOTAHotelLowPrice(int shopID,OTAEnum otaType);

}
