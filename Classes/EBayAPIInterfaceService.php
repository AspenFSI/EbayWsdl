<?php

namespace EbayWsdl\Classes;


/**
 * 849
 */
class EBayAPIInterfaceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AddDisputeRequestType' => 'EbayWsdl\\Classes\\AddDisputeRequestType',
      'AddDisputeResponseType' => 'EbayWsdl\\Classes\\AddDisputeResponseType',
      'AddDisputeResponseRequestType' => 'EbayWsdl\\Classes\\AddDisputeResponseRequestType',
      'AddDisputeResponseResponseType' => 'EbayWsdl\\Classes\\AddDisputeResponseResponseType',
      'AddFixedPriceItemRequestType' => 'EbayWsdl\\Classes\\AddFixedPriceItemRequestType',
      'AddFixedPriceItemResponseType' => 'EbayWsdl\\Classes\\AddFixedPriceItemResponseType',
      'AddItemRequestType' => 'EbayWsdl\\Classes\\AddItemRequestType',
      'AddItemResponseType' => 'EbayWsdl\\Classes\\AddItemResponseType',
      'AddItemFromSellingManagerTemplateRequestType' => 'EbayWsdl\\Classes\\AddItemFromSellingManagerTemplateRequestType',
      'AddItemFromSellingManagerTemplateResponseType' => 'EbayWsdl\\Classes\\AddItemFromSellingManagerTemplateResponseType',
      'AddItemsRequestType' => 'EbayWsdl\\Classes\\AddItemsRequestType',
      'AddItemsResponseType' => 'EbayWsdl\\Classes\\AddItemsResponseType',
      'AddMemberMessageAAQToPartnerRequestType' => 'EbayWsdl\\Classes\\AddMemberMessageAAQToPartnerRequestType',
      'AddMemberMessageAAQToPartnerResponseType' => 'EbayWsdl\\Classes\\AddMemberMessageAAQToPartnerResponseType',
      'AddMemberMessageRTQRequestType' => 'EbayWsdl\\Classes\\AddMemberMessageRTQRequestType',
      'AddMemberMessageRTQResponseType' => 'EbayWsdl\\Classes\\AddMemberMessageRTQResponseType',
      'AddMemberMessagesAAQToBidderRequestType' => 'EbayWsdl\\Classes\\AddMemberMessagesAAQToBidderRequestType',
      'AddMemberMessagesAAQToBidderResponseType' => 'EbayWsdl\\Classes\\AddMemberMessagesAAQToBidderResponseType',
      'AddOrderRequestType' => 'EbayWsdl\\Classes\\AddOrderRequestType',
      'AddOrderResponseType' => 'EbayWsdl\\Classes\\AddOrderResponseType',
      'AddSecondChanceItemRequestType' => 'EbayWsdl\\Classes\\AddSecondChanceItemRequestType',
      'AddSecondChanceItemResponseType' => 'EbayWsdl\\Classes\\AddSecondChanceItemResponseType',
      'AddSellingManagerInventoryFolderRequestType' => 'EbayWsdl\\Classes\\AddSellingManagerInventoryFolderRequestType',
      'AddSellingManagerInventoryFolderResponseType' => 'EbayWsdl\\Classes\\AddSellingManagerInventoryFolderResponseType',
      'AddSellingManagerProductRequestType' => 'EbayWsdl\\Classes\\AddSellingManagerProductRequestType',
      'AddSellingManagerProductResponseType' => 'EbayWsdl\\Classes\\AddSellingManagerProductResponseType',
      'AddSellingManagerTemplateRequestType' => 'EbayWsdl\\Classes\\AddSellingManagerTemplateRequestType',
      'AddSellingManagerTemplateResponseType' => 'EbayWsdl\\Classes\\AddSellingManagerTemplateResponseType',
      'AddToItemDescriptionRequestType' => 'EbayWsdl\\Classes\\AddToItemDescriptionRequestType',
      'AddToItemDescriptionResponseType' => 'EbayWsdl\\Classes\\AddToItemDescriptionResponseType',
      'AddToWatchListRequestType' => 'EbayWsdl\\Classes\\AddToWatchListRequestType',
      'AddToWatchListResponseType' => 'EbayWsdl\\Classes\\AddToWatchListResponseType',
      'AddTransactionConfirmationItemRequestType' => 'EbayWsdl\\Classes\\AddTransactionConfirmationItemRequestType',
      'AddTransactionConfirmationItemResponseType' => 'EbayWsdl\\Classes\\AddTransactionConfirmationItemResponseType',
      'CompleteSaleRequestType' => 'EbayWsdl\\Classes\\CompleteSaleRequestType',
      'CompleteSaleResponseType' => 'EbayWsdl\\Classes\\CompleteSaleResponseType',
      'ConfirmIdentityRequestType' => 'EbayWsdl\\Classes\\ConfirmIdentityRequestType',
      'ConfirmIdentityResponseType' => 'EbayWsdl\\Classes\\ConfirmIdentityResponseType',
      'DeleteMyMessagesRequestType' => 'EbayWsdl\\Classes\\DeleteMyMessagesRequestType',
      'DeleteMyMessagesResponseType' => 'EbayWsdl\\Classes\\DeleteMyMessagesResponseType',
      'DeleteSellingManagerInventoryFolderRequestType' => 'EbayWsdl\\Classes\\DeleteSellingManagerInventoryFolderRequestType',
      'DeleteSellingManagerInventoryFolderResponseType' => 'EbayWsdl\\Classes\\DeleteSellingManagerInventoryFolderResponseType',
      'DeleteSellingManagerItemAutomationRuleRequestType' => 'EbayWsdl\\Classes\\DeleteSellingManagerItemAutomationRuleRequestType',
      'DeleteSellingManagerItemAutomationRuleResponseType' => 'EbayWsdl\\Classes\\DeleteSellingManagerItemAutomationRuleResponseType',
      'DeleteSellingManagerProductRequestType' => 'EbayWsdl\\Classes\\DeleteSellingManagerProductRequestType',
      'DeleteSellingManagerProductResponseType' => 'EbayWsdl\\Classes\\DeleteSellingManagerProductResponseType',
      'DeleteSellingManagerTemplateRequestType' => 'EbayWsdl\\Classes\\DeleteSellingManagerTemplateRequestType',
      'DeleteSellingManagerTemplateResponseType' => 'EbayWsdl\\Classes\\DeleteSellingManagerTemplateResponseType',
      'DeleteSellingManagerTemplateAutomationRuleRequestType' => 'EbayWsdl\\Classes\\DeleteSellingManagerTemplateAutomationRuleRequestType',
      'DeleteSellingManagerTemplateAutomationRuleResponseType' => 'EbayWsdl\\Classes\\DeleteSellingManagerTemplateAutomationRuleResponseType',
      'DisableUnpaidItemAssistanceRequestType' => 'EbayWsdl\\Classes\\DisableUnpaidItemAssistanceRequestType',
      'DisableUnpaidItemAssistanceResponseType' => 'EbayWsdl\\Classes\\DisableUnpaidItemAssistanceResponseType',
      'EndFixedPriceItemRequestType' => 'EbayWsdl\\Classes\\EndFixedPriceItemRequestType',
      'EndFixedPriceItemResponseType' => 'EbayWsdl\\Classes\\EndFixedPriceItemResponseType',
      'EndItemRequestType' => 'EbayWsdl\\Classes\\EndItemRequestType',
      'EndItemResponseType' => 'EbayWsdl\\Classes\\EndItemResponseType',
      'EndItemsRequestType' => 'EbayWsdl\\Classes\\EndItemsRequestType',
      'EndItemsResponseType' => 'EbayWsdl\\Classes\\EndItemsResponseType',
      'ExtendSiteHostedPicturesRequestType' => 'EbayWsdl\\Classes\\ExtendSiteHostedPicturesRequestType',
      'ExtendSiteHostedPicturesResponseType' => 'EbayWsdl\\Classes\\ExtendSiteHostedPicturesResponseType',
      'FetchTokenRequestType' => 'EbayWsdl\\Classes\\FetchTokenRequestType',
      'FetchTokenResponseType' => 'EbayWsdl\\Classes\\FetchTokenResponseType',
      'GetAccountRequestType' => 'EbayWsdl\\Classes\\GetAccountRequestType',
      'GetAccountResponseType' => 'EbayWsdl\\Classes\\GetAccountResponseType',
      'GetAdFormatLeadsRequestType' => 'EbayWsdl\\Classes\\GetAdFormatLeadsRequestType',
      'GetAdFormatLeadsResponseType' => 'EbayWsdl\\Classes\\GetAdFormatLeadsResponseType',
      'GetAllBiddersRequestType' => 'EbayWsdl\\Classes\\GetAllBiddersRequestType',
      'GetAllBiddersResponseType' => 'EbayWsdl\\Classes\\GetAllBiddersResponseType',
      'GetApiAccessRulesRequestType' => 'EbayWsdl\\Classes\\GetApiAccessRulesRequestType',
      'GetApiAccessRulesResponseType' => 'EbayWsdl\\Classes\\GetApiAccessRulesResponseType',
      'GetAttributesCSRequestType' => 'EbayWsdl\\Classes\\GetAttributesCSRequestType',
      'GetAttributesCSResponseType' => 'EbayWsdl\\Classes\\GetAttributesCSResponseType',
      'GetAttributesXSLRequestType' => 'EbayWsdl\\Classes\\GetAttributesXSLRequestType',
      'GetAttributesXSLResponseType' => 'EbayWsdl\\Classes\\GetAttributesXSLResponseType',
      'GetBestOffersRequestType' => 'EbayWsdl\\Classes\\GetBestOffersRequestType',
      'GetBestOffersResponseType' => 'EbayWsdl\\Classes\\GetBestOffersResponseType',
      'GetBidderListRequestType' => 'EbayWsdl\\Classes\\GetBidderListRequestType',
      'GetBidderListResponseType' => 'EbayWsdl\\Classes\\GetBidderListResponseType',
      'GetCategoriesRequestType' => 'EbayWsdl\\Classes\\GetCategoriesRequestType',
      'GetCategoriesResponseType' => 'EbayWsdl\\Classes\\GetCategoriesResponseType',
      'GetCategory2CSRequestType' => 'EbayWsdl\\Classes\\GetCategory2CSRequestType',
      'GetCategory2CSResponseType' => 'EbayWsdl\\Classes\\GetCategory2CSResponseType',
      'GetCategoryFeaturesRequestType' => 'EbayWsdl\\Classes\\GetCategoryFeaturesRequestType',
      'GetCategoryFeaturesResponseType' => 'EbayWsdl\\Classes\\GetCategoryFeaturesResponseType',
      'GetCategoryMappingsRequestType' => 'EbayWsdl\\Classes\\GetCategoryMappingsRequestType',
      'GetCategoryMappingsResponseType' => 'EbayWsdl\\Classes\\GetCategoryMappingsResponseType',
      'GetCategorySpecificsRequestType' => 'EbayWsdl\\Classes\\GetCategorySpecificsRequestType',
      'GetCategorySpecificsResponseType' => 'EbayWsdl\\Classes\\GetCategorySpecificsResponseType',
      'GetChallengeTokenRequestType' => 'EbayWsdl\\Classes\\GetChallengeTokenRequestType',
      'GetChallengeTokenResponseType' => 'EbayWsdl\\Classes\\GetChallengeTokenResponseType',
      'GetCharitiesRequestType' => 'EbayWsdl\\Classes\\GetCharitiesRequestType',
      'GetCharitiesResponseType' => 'EbayWsdl\\Classes\\GetCharitiesResponseType',
      'GetClientAlertsAuthTokenRequestType' => 'EbayWsdl\\Classes\\GetClientAlertsAuthTokenRequestType',
      'GetClientAlertsAuthTokenResponseType' => 'EbayWsdl\\Classes\\GetClientAlertsAuthTokenResponseType',
      'GetContextualKeywordsRequestType' => 'EbayWsdl\\Classes\\GetContextualKeywordsRequestType',
      'GetContextualKeywordsResponseType' => 'EbayWsdl\\Classes\\GetContextualKeywordsResponseType',
      'GetCrossPromotionsRequestType' => 'EbayWsdl\\Classes\\GetCrossPromotionsRequestType',
      'GetCrossPromotionsResponseType' => 'EbayWsdl\\Classes\\GetCrossPromotionsResponseType',
      'GetDescriptionTemplatesRequestType' => 'EbayWsdl\\Classes\\GetDescriptionTemplatesRequestType',
      'GetDescriptionTemplatesResponseType' => 'EbayWsdl\\Classes\\GetDescriptionTemplatesResponseType',
      'GetDisputeRequestType' => 'EbayWsdl\\Classes\\GetDisputeRequestType',
      'GetDisputeResponseType' => 'EbayWsdl\\Classes\\GetDisputeResponseType',
      'GetFeedbackRequestType' => 'EbayWsdl\\Classes\\GetFeedbackRequestType',
      'GetFeedbackResponseType' => 'EbayWsdl\\Classes\\GetFeedbackResponseType',
      'GetHighBiddersRequestType' => 'EbayWsdl\\Classes\\GetHighBiddersRequestType',
      'GetHighBiddersResponseType' => 'EbayWsdl\\Classes\\GetHighBiddersResponseType',
      'GetItemRequestType' => 'EbayWsdl\\Classes\\GetItemRequestType',
      'GetItemResponseType' => 'EbayWsdl\\Classes\\GetItemResponseType',
      'GetItemRecommendationsRequestType' => 'EbayWsdl\\Classes\\GetItemRecommendationsRequestType',
      'GetItemRecommendationsResponseType' => 'EbayWsdl\\Classes\\GetItemRecommendationsResponseType',
      'GetItemShippingRequestType' => 'EbayWsdl\\Classes\\GetItemShippingRequestType',
      'GetItemShippingResponseType' => 'EbayWsdl\\Classes\\GetItemShippingResponseType',
      'GetItemTransactionsRequestType' => 'EbayWsdl\\Classes\\GetItemTransactionsRequestType',
      'GetItemTransactionsResponseType' => 'EbayWsdl\\Classes\\GetItemTransactionsResponseType',
      'GetItemsAwaitingFeedbackRequestType' => 'EbayWsdl\\Classes\\GetItemsAwaitingFeedbackRequestType',
      'GetItemsAwaitingFeedbackResponseType' => 'EbayWsdl\\Classes\\GetItemsAwaitingFeedbackResponseType',
      'GetMemberMessagesRequestType' => 'EbayWsdl\\Classes\\GetMemberMessagesRequestType',
      'GetMemberMessagesResponseType' => 'EbayWsdl\\Classes\\GetMemberMessagesResponseType',
      'GetMessagePreferencesRequestType' => 'EbayWsdl\\Classes\\GetMessagePreferencesRequestType',
      'GetMessagePreferencesResponseType' => 'EbayWsdl\\Classes\\GetMessagePreferencesResponseType',
      'GetMyMessagesRequestType' => 'EbayWsdl\\Classes\\GetMyMessagesRequestType',
      'GetMyMessagesResponseType' => 'EbayWsdl\\Classes\\GetMyMessagesResponseType',
      'GetMyeBayBuyingRequestType' => 'EbayWsdl\\Classes\\GetMyeBayBuyingRequestType',
      'GetMyeBayBuyingResponseType' => 'EbayWsdl\\Classes\\GetMyeBayBuyingResponseType',
      'GetMyeBayRemindersRequestType' => 'EbayWsdl\\Classes\\GetMyeBayRemindersRequestType',
      'GetMyeBayRemindersResponseType' => 'EbayWsdl\\Classes\\GetMyeBayRemindersResponseType',
      'GetMyeBaySellingRequestType' => 'EbayWsdl\\Classes\\GetMyeBaySellingRequestType',
      'GetMyeBaySellingResponseType' => 'EbayWsdl\\Classes\\GetMyeBaySellingResponseType',
      'GetNotificationPreferencesRequestType' => 'EbayWsdl\\Classes\\GetNotificationPreferencesRequestType',
      'GetNotificationPreferencesResponseType' => 'EbayWsdl\\Classes\\GetNotificationPreferencesResponseType',
      'GetNotificationsUsageRequestType' => 'EbayWsdl\\Classes\\GetNotificationsUsageRequestType',
      'GetNotificationsUsageResponseType' => 'EbayWsdl\\Classes\\GetNotificationsUsageResponseType',
      'GetOrderTransactionsRequestType' => 'EbayWsdl\\Classes\\GetOrderTransactionsRequestType',
      'GetOrderTransactionsResponseType' => 'EbayWsdl\\Classes\\GetOrderTransactionsResponseType',
      'GetOrdersRequestType' => 'EbayWsdl\\Classes\\GetOrdersRequestType',
      'GetOrdersResponseType' => 'EbayWsdl\\Classes\\GetOrdersResponseType',
      'GetPictureManagerDetailsRequestType' => 'EbayWsdl\\Classes\\GetPictureManagerDetailsRequestType',
      'GetPictureManagerDetailsResponseType' => 'EbayWsdl\\Classes\\GetPictureManagerDetailsResponseType',
      'GetPictureManagerOptionsRequestType' => 'EbayWsdl\\Classes\\GetPictureManagerOptionsRequestType',
      'GetPictureManagerOptionsResponseType' => 'EbayWsdl\\Classes\\GetPictureManagerOptionsResponseType',
      'GetProductFamilyMembersRequestType' => 'EbayWsdl\\Classes\\GetProductFamilyMembersRequestType',
      'GetProductFamilyMembersResponseType' => 'EbayWsdl\\Classes\\GetProductFamilyMembersResponseType',
      'GetProductFinderRequestType' => 'EbayWsdl\\Classes\\GetProductFinderRequestType',
      'GetProductFinderResponseType' => 'EbayWsdl\\Classes\\GetProductFinderResponseType',
      'GetProductFinderXSLRequestType' => 'EbayWsdl\\Classes\\GetProductFinderXSLRequestType',
      'GetProductFinderXSLResponseType' => 'EbayWsdl\\Classes\\GetProductFinderXSLResponseType',
      'GetProductSearchPageRequestType' => 'EbayWsdl\\Classes\\GetProductSearchPageRequestType',
      'GetProductSearchPageResponseType' => 'EbayWsdl\\Classes\\GetProductSearchPageResponseType',
      'GetProductSearchResultsRequestType' => 'EbayWsdl\\Classes\\GetProductSearchResultsRequestType',
      'GetProductSearchResultsResponseType' => 'EbayWsdl\\Classes\\GetProductSearchResultsResponseType',
      'GetProductSellingPagesRequestType' => 'EbayWsdl\\Classes\\GetProductSellingPagesRequestType',
      'GetProductSellingPagesResponseType' => 'EbayWsdl\\Classes\\GetProductSellingPagesResponseType',
      'GetPromotionRulesRequestType' => 'EbayWsdl\\Classes\\GetPromotionRulesRequestType',
      'GetPromotionRulesResponseType' => 'EbayWsdl\\Classes\\GetPromotionRulesResponseType',
      'GetPromotionalSaleDetailsRequestType' => 'EbayWsdl\\Classes\\GetPromotionalSaleDetailsRequestType',
      'GetPromotionalSaleDetailsResponseType' => 'EbayWsdl\\Classes\\GetPromotionalSaleDetailsResponseType',
      'GetSellerDashboardRequestType' => 'EbayWsdl\\Classes\\GetSellerDashboardRequestType',
      'GetSellerDashboardResponseType' => 'EbayWsdl\\Classes\\GetSellerDashboardResponseType',
      'GetSellerEventsRequestType' => 'EbayWsdl\\Classes\\GetSellerEventsRequestType',
      'GetSellerEventsResponseType' => 'EbayWsdl\\Classes\\GetSellerEventsResponseType',
      'GetSellerListRequestType' => 'EbayWsdl\\Classes\\GetSellerListRequestType',
      'GetSellerListResponseType' => 'EbayWsdl\\Classes\\GetSellerListResponseType',
      'GetSellerPaymentsRequestType' => 'EbayWsdl\\Classes\\GetSellerPaymentsRequestType',
      'GetSellerPaymentsResponseType' => 'EbayWsdl\\Classes\\GetSellerPaymentsResponseType',
      'GetSellerTransactionsRequestType' => 'EbayWsdl\\Classes\\GetSellerTransactionsRequestType',
      'GetSellerTransactionsResponseType' => 'EbayWsdl\\Classes\\GetSellerTransactionsResponseType',
      'GetSellingManagerAlertsRequestType' => 'EbayWsdl\\Classes\\GetSellingManagerAlertsRequestType',
      'GetSellingManagerAlertsResponseType' => 'EbayWsdl\\Classes\\GetSellingManagerAlertsResponseType',
      'GetSellingManagerEmailLogRequestType' => 'EbayWsdl\\Classes\\GetSellingManagerEmailLogRequestType',
      'GetSellingManagerEmailLogResponseType' => 'EbayWsdl\\Classes\\GetSellingManagerEmailLogResponseType',
      'GetSellingManagerInventoryRequestType' => 'EbayWsdl\\Classes\\GetSellingManagerInventoryRequestType',
      'GetSellingManagerInventoryResponseType' => 'EbayWsdl\\Classes\\GetSellingManagerInventoryResponseType',
      'GetSellingManagerInventoryFolderRequestType' => 'EbayWsdl\\Classes\\GetSellingManagerInventoryFolderRequestType',
      'GetSellingManagerInventoryFolderResponseType' => 'EbayWsdl\\Classes\\GetSellingManagerInventoryFolderResponseType',
      'GetSellingManagerItemAutomationRuleRequestType' => 'EbayWsdl\\Classes\\GetSellingManagerItemAutomationRuleRequestType',
      'GetSellingManagerItemAutomationRuleResponseType' => 'EbayWsdl\\Classes\\GetSellingManagerItemAutomationRuleResponseType',
      'GetSellingManagerSaleRecordRequestType' => 'EbayWsdl\\Classes\\GetSellingManagerSaleRecordRequestType',
      'GetSellingManagerSaleRecordResponseType' => 'EbayWsdl\\Classes\\GetSellingManagerSaleRecordResponseType',
      'GetSellingManagerSoldListingsRequestType' => 'EbayWsdl\\Classes\\GetSellingManagerSoldListingsRequestType',
      'GetSellingManagerSoldListingsResponseType' => 'EbayWsdl\\Classes\\GetSellingManagerSoldListingsResponseType',
      'GetSellingManagerTemplateAutomationRuleRequestType' => 'EbayWsdl\\Classes\\GetSellingManagerTemplateAutomationRuleRequestType',
      'GetSellingManagerTemplateAutomationRuleResponseType' => 'EbayWsdl\\Classes\\GetSellingManagerTemplateAutomationRuleResponseType',
      'GetSellingManagerTemplatesRequestType' => 'EbayWsdl\\Classes\\GetSellingManagerTemplatesRequestType',
      'GetSellingManagerTemplatesResponseType' => 'EbayWsdl\\Classes\\GetSellingManagerTemplatesResponseType',
      'GetSessionIDRequestType' => 'EbayWsdl\\Classes\\GetSessionIDRequestType',
      'GetSessionIDResponseType' => 'EbayWsdl\\Classes\\GetSessionIDResponseType',
      'GetShippingDiscountProfilesRequestType' => 'EbayWsdl\\Classes\\GetShippingDiscountProfilesRequestType',
      'GetShippingDiscountProfilesResponseType' => 'EbayWsdl\\Classes\\GetShippingDiscountProfilesResponseType',
      'GetStoreRequestType' => 'EbayWsdl\\Classes\\GetStoreRequestType',
      'GetStoreResponseType' => 'EbayWsdl\\Classes\\GetStoreResponseType',
      'GetStoreCategoryUpdateStatusRequestType' => 'EbayWsdl\\Classes\\GetStoreCategoryUpdateStatusRequestType',
      'GetStoreCategoryUpdateStatusResponseType' => 'EbayWsdl\\Classes\\GetStoreCategoryUpdateStatusResponseType',
      'GetStoreCustomPageRequestType' => 'EbayWsdl\\Classes\\GetStoreCustomPageRequestType',
      'GetStoreCustomPageResponseType' => 'EbayWsdl\\Classes\\GetStoreCustomPageResponseType',
      'GetStoreOptionsRequestType' => 'EbayWsdl\\Classes\\GetStoreOptionsRequestType',
      'GetStoreOptionsResponseType' => 'EbayWsdl\\Classes\\GetStoreOptionsResponseType',
      'GetStorePreferencesRequestType' => 'EbayWsdl\\Classes\\GetStorePreferencesRequestType',
      'GetStorePreferencesResponseType' => 'EbayWsdl\\Classes\\GetStorePreferencesResponseType',
      'GetSuggestedCategoriesRequestType' => 'EbayWsdl\\Classes\\GetSuggestedCategoriesRequestType',
      'GetSuggestedCategoriesResponseType' => 'EbayWsdl\\Classes\\GetSuggestedCategoriesResponseType',
      'GetTaxTableRequestType' => 'EbayWsdl\\Classes\\GetTaxTableRequestType',
      'GetTaxTableResponseType' => 'EbayWsdl\\Classes\\GetTaxTableResponseType',
      'GetTokenStatusRequestType' => 'EbayWsdl\\Classes\\GetTokenStatusRequestType',
      'GetTokenStatusResponseType' => 'EbayWsdl\\Classes\\GetTokenStatusResponseType',
      'GetUserRequestType' => 'EbayWsdl\\Classes\\GetUserRequestType',
      'GetUserResponseType' => 'EbayWsdl\\Classes\\GetUserResponseType',
      'GetUserContactDetailsRequestType' => 'EbayWsdl\\Classes\\GetUserContactDetailsRequestType',
      'GetUserContactDetailsResponseType' => 'EbayWsdl\\Classes\\GetUserContactDetailsResponseType',
      'GetUserDisputesRequestType' => 'EbayWsdl\\Classes\\GetUserDisputesRequestType',
      'GetUserDisputesResponseType' => 'EbayWsdl\\Classes\\GetUserDisputesResponseType',
      'GetUserPreferencesRequestType' => 'EbayWsdl\\Classes\\GetUserPreferencesRequestType',
      'GetUserPreferencesResponseType' => 'EbayWsdl\\Classes\\GetUserPreferencesResponseType',
      'GetVeROReasonCodeDetailsRequestType' => 'EbayWsdl\\Classes\\GetVeROReasonCodeDetailsRequestType',
      'GetVeROReasonCodeDetailsResponseType' => 'EbayWsdl\\Classes\\GetVeROReasonCodeDetailsResponseType',
      'GetVeROReportStatusRequestType' => 'EbayWsdl\\Classes\\GetVeROReportStatusRequestType',
      'GetVeROReportStatusResponseType' => 'EbayWsdl\\Classes\\GetVeROReportStatusResponseType',
      'GetWantItNowPostRequestType' => 'EbayWsdl\\Classes\\GetWantItNowPostRequestType',
      'GetWantItNowPostResponseType' => 'EbayWsdl\\Classes\\GetWantItNowPostResponseType',
      'GetWantItNowSearchResultsRequestType' => 'EbayWsdl\\Classes\\GetWantItNowSearchResultsRequestType',
      'GetWantItNowSearchResultsResponseType' => 'EbayWsdl\\Classes\\GetWantItNowSearchResultsResponseType',
      'GeteBayDetailsRequestType' => 'EbayWsdl\\Classes\\GeteBayDetailsRequestType',
      'GeteBayDetailsResponseType' => 'EbayWsdl\\Classes\\GeteBayDetailsResponseType',
      'GeteBayOfficialTimeRequestType' => 'EbayWsdl\\Classes\\GeteBayOfficialTimeRequestType',
      'GeteBayOfficialTimeResponseType' => 'EbayWsdl\\Classes\\GeteBayOfficialTimeResponseType',
      'IssueRefundRequestType' => 'EbayWsdl\\Classes\\IssueRefundRequestType',
      'IssueRefundResponseType' => 'EbayWsdl\\Classes\\IssueRefundResponseType',
      'LeaveFeedbackRequestType' => 'EbayWsdl\\Classes\\LeaveFeedbackRequestType',
      'LeaveFeedbackResponseType' => 'EbayWsdl\\Classes\\LeaveFeedbackResponseType',
      'MoveSellingManagerInventoryFolderRequestType' => 'EbayWsdl\\Classes\\MoveSellingManagerInventoryFolderRequestType',
      'MoveSellingManagerInventoryFolderResponseType' => 'EbayWsdl\\Classes\\MoveSellingManagerInventoryFolderResponseType',
      'PlaceOfferRequestType' => 'EbayWsdl\\Classes\\PlaceOfferRequestType',
      'PlaceOfferResponseType' => 'EbayWsdl\\Classes\\PlaceOfferResponseType',
      'RelistFixedPriceItemRequestType' => 'EbayWsdl\\Classes\\RelistFixedPriceItemRequestType',
      'RelistFixedPriceItemResponseType' => 'EbayWsdl\\Classes\\RelistFixedPriceItemResponseType',
      'RelistItemRequestType' => 'EbayWsdl\\Classes\\RelistItemRequestType',
      'RelistItemResponseType' => 'EbayWsdl\\Classes\\RelistItemResponseType',
      'RemoveFromWatchListRequestType' => 'EbayWsdl\\Classes\\RemoveFromWatchListRequestType',
      'RemoveFromWatchListResponseType' => 'EbayWsdl\\Classes\\RemoveFromWatchListResponseType',
      'RespondToBestOfferRequestType' => 'EbayWsdl\\Classes\\RespondToBestOfferRequestType',
      'RespondToBestOfferResponseType' => 'EbayWsdl\\Classes\\RespondToBestOfferResponseType',
      'RespondToFeedbackRequestType' => 'EbayWsdl\\Classes\\RespondToFeedbackRequestType',
      'RespondToFeedbackResponseType' => 'EbayWsdl\\Classes\\RespondToFeedbackResponseType',
      'RespondToWantItNowPostRequestType' => 'EbayWsdl\\Classes\\RespondToWantItNowPostRequestType',
      'RespondToWantItNowPostResponseType' => 'EbayWsdl\\Classes\\RespondToWantItNowPostResponseType',
      'ReviseCheckoutStatusRequestType' => 'EbayWsdl\\Classes\\ReviseCheckoutStatusRequestType',
      'ReviseCheckoutStatusResponseType' => 'EbayWsdl\\Classes\\ReviseCheckoutStatusResponseType',
      'ReviseFixedPriceItemRequestType' => 'EbayWsdl\\Classes\\ReviseFixedPriceItemRequestType',
      'ReviseFixedPriceItemResponseType' => 'EbayWsdl\\Classes\\ReviseFixedPriceItemResponseType',
      'ReviseInventoryStatusRequestType' => 'EbayWsdl\\Classes\\ReviseInventoryStatusRequestType',
      'ReviseInventoryStatusResponseType' => 'EbayWsdl\\Classes\\ReviseInventoryStatusResponseType',
      'ReviseItemRequestType' => 'EbayWsdl\\Classes\\ReviseItemRequestType',
      'ReviseItemResponseType' => 'EbayWsdl\\Classes\\ReviseItemResponseType',
      'ReviseMyMessagesRequestType' => 'EbayWsdl\\Classes\\ReviseMyMessagesRequestType',
      'ReviseMyMessagesResponseType' => 'EbayWsdl\\Classes\\ReviseMyMessagesResponseType',
      'ReviseMyMessagesFoldersRequestType' => 'EbayWsdl\\Classes\\ReviseMyMessagesFoldersRequestType',
      'ReviseMyMessagesFoldersResponseType' => 'EbayWsdl\\Classes\\ReviseMyMessagesFoldersResponseType',
      'ReviseSellingManagerInventoryFolderRequestType' => 'EbayWsdl\\Classes\\ReviseSellingManagerInventoryFolderRequestType',
      'ReviseSellingManagerInventoryFolderResponseType' => 'EbayWsdl\\Classes\\ReviseSellingManagerInventoryFolderResponseType',
      'ReviseSellingManagerProductRequestType' => 'EbayWsdl\\Classes\\ReviseSellingManagerProductRequestType',
      'ReviseSellingManagerProductResponseType' => 'EbayWsdl\\Classes\\ReviseSellingManagerProductResponseType',
      'ReviseSellingManagerSaleRecordRequestType' => 'EbayWsdl\\Classes\\ReviseSellingManagerSaleRecordRequestType',
      'ReviseSellingManagerSaleRecordResponseType' => 'EbayWsdl\\Classes\\ReviseSellingManagerSaleRecordResponseType',
      'ReviseSellingManagerTemplateRequestType' => 'EbayWsdl\\Classes\\ReviseSellingManagerTemplateRequestType',
      'ReviseSellingManagerTemplateResponseType' => 'EbayWsdl\\Classes\\ReviseSellingManagerTemplateResponseType',
      'RevokeTokenRequestType' => 'EbayWsdl\\Classes\\RevokeTokenRequestType',
      'RevokeTokenResponseType' => 'EbayWsdl\\Classes\\RevokeTokenResponseType',
      'SaveItemToSellingManagerTemplateRequestType' => 'EbayWsdl\\Classes\\SaveItemToSellingManagerTemplateRequestType',
      'SaveItemToSellingManagerTemplateResponseType' => 'EbayWsdl\\Classes\\SaveItemToSellingManagerTemplateResponseType',
      'SellerReverseDisputeRequestType' => 'EbayWsdl\\Classes\\SellerReverseDisputeRequestType',
      'SellerReverseDisputeResponseType' => 'EbayWsdl\\Classes\\SellerReverseDisputeResponseType',
      'SendInvoiceRequestType' => 'EbayWsdl\\Classes\\SendInvoiceRequestType',
      'SendInvoiceResponseType' => 'EbayWsdl\\Classes\\SendInvoiceResponseType',
      'SetMessagePreferencesRequestType' => 'EbayWsdl\\Classes\\SetMessagePreferencesRequestType',
      'SetMessagePreferencesResponseType' => 'EbayWsdl\\Classes\\SetMessagePreferencesResponseType',
      'SetNotificationPreferencesRequestType' => 'EbayWsdl\\Classes\\SetNotificationPreferencesRequestType',
      'SetNotificationPreferencesResponseType' => 'EbayWsdl\\Classes\\SetNotificationPreferencesResponseType',
      'SetPictureManagerDetailsRequestType' => 'EbayWsdl\\Classes\\SetPictureManagerDetailsRequestType',
      'SetPictureManagerDetailsResponseType' => 'EbayWsdl\\Classes\\SetPictureManagerDetailsResponseType',
      'SetPromotionalSaleRequestType' => 'EbayWsdl\\Classes\\SetPromotionalSaleRequestType',
      'SetPromotionalSaleResponseType' => 'EbayWsdl\\Classes\\SetPromotionalSaleResponseType',
      'SetPromotionalSaleListingsRequestType' => 'EbayWsdl\\Classes\\SetPromotionalSaleListingsRequestType',
      'SetPromotionalSaleListingsResponseType' => 'EbayWsdl\\Classes\\SetPromotionalSaleListingsResponseType',
      'SetSellingManagerFeedbackOptionsRequestType' => 'EbayWsdl\\Classes\\SetSellingManagerFeedbackOptionsRequestType',
      'SetSellingManagerFeedbackOptionsResponseType' => 'EbayWsdl\\Classes\\SetSellingManagerFeedbackOptionsResponseType',
      'SetSellingManagerItemAutomationRuleRequestType' => 'EbayWsdl\\Classes\\SetSellingManagerItemAutomationRuleRequestType',
      'SetSellingManagerItemAutomationRuleResponseType' => 'EbayWsdl\\Classes\\SetSellingManagerItemAutomationRuleResponseType',
      'SetSellingManagerTemplateAutomationRuleRequestType' => 'EbayWsdl\\Classes\\SetSellingManagerTemplateAutomationRuleRequestType',
      'SetSellingManagerTemplateAutomationRuleResponseType' => 'EbayWsdl\\Classes\\SetSellingManagerTemplateAutomationRuleResponseType',
      'SetShippingDiscountProfilesRequestType' => 'EbayWsdl\\Classes\\SetShippingDiscountProfilesRequestType',
      'SetShippingDiscountProfilesResponseType' => 'EbayWsdl\\Classes\\SetShippingDiscountProfilesResponseType',
      'SetStoreRequestType' => 'EbayWsdl\\Classes\\SetStoreRequestType',
      'SetStoreResponseType' => 'EbayWsdl\\Classes\\SetStoreResponseType',
      'SetStoreCategoriesRequestType' => 'EbayWsdl\\Classes\\SetStoreCategoriesRequestType',
      'SetStoreCategoriesResponseType' => 'EbayWsdl\\Classes\\SetStoreCategoriesResponseType',
      'SetStoreCustomPageRequestType' => 'EbayWsdl\\Classes\\SetStoreCustomPageRequestType',
      'SetStoreCustomPageResponseType' => 'EbayWsdl\\Classes\\SetStoreCustomPageResponseType',
      'SetStorePreferencesRequestType' => 'EbayWsdl\\Classes\\SetStorePreferencesRequestType',
      'SetStorePreferencesResponseType' => 'EbayWsdl\\Classes\\SetStorePreferencesResponseType',
      'SetTaxTableRequestType' => 'EbayWsdl\\Classes\\SetTaxTableRequestType',
      'SetTaxTableResponseType' => 'EbayWsdl\\Classes\\SetTaxTableResponseType',
      'SetUserNotesRequestType' => 'EbayWsdl\\Classes\\SetUserNotesRequestType',
      'SetUserNotesResponseType' => 'EbayWsdl\\Classes\\SetUserNotesResponseType',
      'SetUserPreferencesRequestType' => 'EbayWsdl\\Classes\\SetUserPreferencesRequestType',
      'SetUserPreferencesResponseType' => 'EbayWsdl\\Classes\\SetUserPreferencesResponseType',
      'UploadSiteHostedPicturesRequestType' => 'EbayWsdl\\Classes\\UploadSiteHostedPicturesRequestType',
      'UploadSiteHostedPicturesResponseType' => 'EbayWsdl\\Classes\\UploadSiteHostedPicturesResponseType',
      'ValidateChallengeInputRequestType' => 'EbayWsdl\\Classes\\ValidateChallengeInputRequestType',
      'ValidateChallengeInputResponseType' => 'EbayWsdl\\Classes\\ValidateChallengeInputResponseType',
      'ValidateTestUserRegistrationRequestType' => 'EbayWsdl\\Classes\\ValidateTestUserRegistrationRequestType',
      'ValidateTestUserRegistrationResponseType' => 'EbayWsdl\\Classes\\ValidateTestUserRegistrationResponseType',
      'VeROReportItemsRequestType' => 'EbayWsdl\\Classes\\VeROReportItemsRequestType',
      'VeROReportItemsResponseType' => 'EbayWsdl\\Classes\\VeROReportItemsResponseType',
      'VerifyAddFixedPriceItemRequestType' => 'EbayWsdl\\Classes\\VerifyAddFixedPriceItemRequestType',
      'VerifyAddFixedPriceItemResponseType' => 'EbayWsdl\\Classes\\VerifyAddFixedPriceItemResponseType',
      'VerifyAddItemRequestType' => 'EbayWsdl\\Classes\\VerifyAddItemRequestType',
      'VerifyAddItemResponseType' => 'EbayWsdl\\Classes\\VerifyAddItemResponseType',
      'VerifyAddSecondChanceItemRequestType' => 'EbayWsdl\\Classes\\VerifyAddSecondChanceItemRequestType',
      'VerifyAddSecondChanceItemResponseType' => 'EbayWsdl\\Classes\\VerifyAddSecondChanceItemResponseType',
      'VerifyRelistItemRequestType' => 'EbayWsdl\\Classes\\VerifyRelistItemRequestType',
      'VerifyRelistItemResponseType' => 'EbayWsdl\\Classes\\VerifyRelistItemResponseType',
      'AbstractRequestType' => 'EbayWsdl\\Classes\\AbstractRequestType',
      'AbstractResponseType' => 'EbayWsdl\\Classes\\AbstractResponseType',
      'BotBlockRequestType' => 'EbayWsdl\\Classes\\BotBlockRequestType',
      'BotBlockResponseType' => 'EbayWsdl\\Classes\\BotBlockResponseType',
      'CustomSecurityHeaderType' => 'EbayWsdl\\Classes\\CustomSecurityHeaderType',
      'DisputeFilterCountType' => 'EbayWsdl\\Classes\\DisputeFilterCountType',
      'DisputeMessageType' => 'EbayWsdl\\Classes\\DisputeMessageType',
      'DisputeResolutionType' => 'EbayWsdl\\Classes\\DisputeResolutionType',
      'DuplicateInvocationDetailsType' => 'EbayWsdl\\Classes\\DuplicateInvocationDetailsType',
      'ErrorParameterType' => 'EbayWsdl\\Classes\\ErrorParameterType',
      'ErrorType' => 'EbayWsdl\\Classes\\ErrorType',
      'FaultDetailsType' => 'EbayWsdl\\Classes\\FaultDetailsType',
      'MeasureType' => 'EbayWsdl\\Classes\\MeasureType',
      'PaginationType' => 'EbayWsdl\\Classes\\PaginationType',
      'QuantityType' => 'EbayWsdl\\Classes\\QuantityType',
      'UserIdPasswordType' => 'EbayWsdl\\Classes\\UserIdPasswordType',
      'XMLRequesterCredentialsType' => 'EbayWsdl\\Classes\\XMLRequesterCredentialsType',
      'ASQPreferencesType' => 'EbayWsdl\\Classes\\ASQPreferencesType',
      'AccountEntriesType' => 'EbayWsdl\\Classes\\AccountEntriesType',
      'AccountEntryType' => 'EbayWsdl\\Classes\\AccountEntryType',
      'AccountSummaryType' => 'EbayWsdl\\Classes\\AccountSummaryType',
      'AdFormatEnabledDefinitionType' => 'EbayWsdl\\Classes\\AdFormatEnabledDefinitionType',
      'AdFormatLeadType' => 'EbayWsdl\\Classes\\AdFormatLeadType',
      'AddItemRequestContainerType' => 'EbayWsdl\\Classes\\AddItemRequestContainerType',
      'AddItemResponseContainerType' => 'EbayWsdl\\Classes\\AddItemResponseContainerType',
      'AddMemberMessagesAAQToBidderRequestContainerType' => 'EbayWsdl\\Classes\\AddMemberMessagesAAQToBidderRequestContainerType',
      'AddMemberMessagesAAQToBidderResponseContainerType' => 'EbayWsdl\\Classes\\AddMemberMessagesAAQToBidderResponseContainerType',
      'AdditionalAccountType' => 'EbayWsdl\\Classes\\AdditionalAccountType',
      'AdditionalCompatibilityEnabledDefinitionType' => 'EbayWsdl\\Classes\\AdditionalCompatibilityEnabledDefinitionType',
      'AddressType' => 'EbayWsdl\\Classes\\AddressType',
      'AffiliateTrackingDetailsType' => 'EbayWsdl\\Classes\\AffiliateTrackingDetailsType',
      'AmountType' => 'EbayWsdl\\Classes\\AmountType',
      'AnnouncementMessageType' => 'EbayWsdl\\Classes\\AnnouncementMessageType',
      'ApiAccessRuleType' => 'EbayWsdl\\Classes\\ApiAccessRuleType',
      'ApplicationDeliveryPreferencesType' => 'EbayWsdl\\Classes\\ApplicationDeliveryPreferencesType',
      'AttributeArrayType' => 'EbayWsdl\\Classes\\AttributeArrayType',
      'AttributeConversionEnabledFeatureDefinitionType' => 'EbayWsdl\\Classes\\AttributeConversionEnabledFeatureDefinitionType',
      'AttributeRecommendationsType' => 'EbayWsdl\\Classes\\AttributeRecommendationsType',
      'AttributeSetArrayType' => 'EbayWsdl\\Classes\\AttributeSetArrayType',
      'AttributeSetType' => 'EbayWsdl\\Classes\\AttributeSetType',
      'AttributeType' => 'EbayWsdl\\Classes\\AttributeType',
      'AverageRatingDetailArrayType' => 'EbayWsdl\\Classes\\AverageRatingDetailArrayType',
      'AverageRatingDetailsType' => 'EbayWsdl\\Classes\\AverageRatingDetailsType',
      'AverageRatingSummaryType' => 'EbayWsdl\\Classes\\AverageRatingSummaryType',
      'Base64BinaryType' => 'EbayWsdl\\Classes\\Base64BinaryType',
      'BasicAmountType' => 'EbayWsdl\\Classes\\BasicAmountType',
      'BasicUpgradePackEnabledDefinitionType' => 'EbayWsdl\\Classes\\BasicUpgradePackEnabledDefinitionType',
      'BestOfferArrayType' => 'EbayWsdl\\Classes\\BestOfferArrayType',
      'BestOfferAutoAcceptEnabledDefinitionType' => 'EbayWsdl\\Classes\\BestOfferAutoAcceptEnabledDefinitionType',
      'BestOfferAutoDeclineEnabledDefinitionType' => 'EbayWsdl\\Classes\\BestOfferAutoDeclineEnabledDefinitionType',
      'BestOfferCounterEnabledDefinitionType' => 'EbayWsdl\\Classes\\BestOfferCounterEnabledDefinitionType',
      'BestOfferDetailsType' => 'EbayWsdl\\Classes\\BestOfferDetailsType',
      'BestOfferEnabledDefinitionType' => 'EbayWsdl\\Classes\\BestOfferEnabledDefinitionType',
      'BestOfferType' => 'EbayWsdl\\Classes\\BestOfferType',
      'BidApprovalArrayType' => 'EbayWsdl\\Classes\\BidApprovalArrayType',
      'BidApprovalType' => 'EbayWsdl\\Classes\\BidApprovalType',
      'BidAssistantListType' => 'EbayWsdl\\Classes\\BidAssistantListType',
      'BidGroupArrayType' => 'EbayWsdl\\Classes\\BidGroupArrayType',
      'BidGroupItemType' => 'EbayWsdl\\Classes\\BidGroupItemType',
      'BidGroupType' => 'EbayWsdl\\Classes\\BidGroupType',
      'BidderDetailArrayType' => 'EbayWsdl\\Classes\\BidderDetailArrayType',
      'BidderDetailType' => 'EbayWsdl\\Classes\\BidderDetailType',
      'BidderNoticePreferencesType' => 'EbayWsdl\\Classes\\BidderNoticePreferencesType',
      'BiddingDetailsType' => 'EbayWsdl\\Classes\\BiddingDetailsType',
      'BiddingSummaryType' => 'EbayWsdl\\Classes\\BiddingSummaryType',
      'BrandMPNIdentifierEnabledDefinitionType' => 'EbayWsdl\\Classes\\BrandMPNIdentifierEnabledDefinitionType',
      'BrandMPNType' => 'EbayWsdl\\Classes\\BrandMPNType',
      'BusinessSellerDetailsType' => 'EbayWsdl\\Classes\\BusinessSellerDetailsType',
      'BuyerGuaranteeEnabledDefinitionType' => 'EbayWsdl\\Classes\\BuyerGuaranteeEnabledDefinitionType',
      'BuyerProtectionDetailsType' => 'EbayWsdl\\Classes\\BuyerProtectionDetailsType',
      'BuyerRequirementDetailsType' => 'EbayWsdl\\Classes\\BuyerRequirementDetailsType',
      'BuyerRoleMetricsType' => 'EbayWsdl\\Classes\\BuyerRoleMetricsType',
      'BuyerSatisfactionDashboardType' => 'EbayWsdl\\Classes\\BuyerSatisfactionDashboardType',
      'BuyerType' => 'EbayWsdl\\Classes\\BuyerType',
      'BuyingGuideDetailsType' => 'EbayWsdl\\Classes\\BuyingGuideDetailsType',
      'BuyingGuideType' => 'EbayWsdl\\Classes\\BuyingGuideType',
      'BuyingSummaryType' => 'EbayWsdl\\Classes\\BuyingSummaryType',
      'CalculatedHandlingDiscountType' => 'EbayWsdl\\Classes\\CalculatedHandlingDiscountType',
      'CalculatedShippingDiscountType' => 'EbayWsdl\\Classes\\CalculatedShippingDiscountType',
      'CalculatedShippingPreferencesType' => 'EbayWsdl\\Classes\\CalculatedShippingPreferencesType',
      'CalculatedShippingRateType' => 'EbayWsdl\\Classes\\CalculatedShippingRateType',
      'CancelOfferArrayType' => 'EbayWsdl\\Classes\\CancelOfferArrayType',
      'CancelOfferType' => 'EbayWsdl\\Classes\\CancelOfferType',
      'CartItemType' => 'EbayWsdl\\Classes\\CartItemType',
      'CatalogProductType' => 'EbayWsdl\\Classes\\CatalogProductType',
      'CategoryArrayType' => 'EbayWsdl\\Classes\\CategoryArrayType',
      'CategoryFeatureType' => 'EbayWsdl\\Classes\\CategoryFeatureType',
      'CategoryGroupType' => 'EbayWsdl\\Classes\\CategoryGroupType',
      'CategoryItemSpecificsType' => 'EbayWsdl\\Classes\\CategoryItemSpecificsType',
      'CategoryMappingType' => 'EbayWsdl\\Classes\\CategoryMappingType',
      'CategoryType' => 'EbayWsdl\\Classes\\CategoryType',
      'CharacteristicSetIDsType' => 'EbayWsdl\\Classes\\CharacteristicSetIDsType',
      'CharacteristicType' => 'EbayWsdl\\Classes\\CharacteristicType',
      'CharacteristicsSetProductHistogramType' => 'EbayWsdl\\Classes\\CharacteristicsSetProductHistogramType',
      'CharacteristicsSetType' => 'EbayWsdl\\Classes\\CharacteristicsSetType',
      'CharityAffiliationDetailType' => 'EbayWsdl\\Classes\\CharityAffiliationDetailType',
      'CharityAffiliationDetailsType' => 'EbayWsdl\\Classes\\CharityAffiliationDetailsType',
      'CharityAffiliationType' => 'EbayWsdl\\Classes\\CharityAffiliationType',
      'CharityAffiliationsType' => 'EbayWsdl\\Classes\\CharityAffiliationsType',
      'CharityIDType' => 'EbayWsdl\\Classes\\CharityIDType',
      'CharityInfoType' => 'EbayWsdl\\Classes\\CharityInfoType',
      'NonProfitSocialAddressType' => 'EbayWsdl\\Classes\\NonProfitSocialAddressType',
      'CharitySellerType' => 'EbayWsdl\\Classes\\CharitySellerType',
      'CharityType' => 'EbayWsdl\\Classes\\CharityType',
      'CheckoutOrderDetailType' => 'EbayWsdl\\Classes\\CheckoutOrderDetailType',
      'CheckoutStatusType' => 'EbayWsdl\\Classes\\CheckoutStatusType',
      'ClassifiedAdAutoAcceptEnabledDefinitionType' => 'EbayWsdl\\Classes\\ClassifiedAdAutoAcceptEnabledDefinitionType',
      'ClassifiedAdAutoDeclineEnabledDefinitionType' => 'EbayWsdl\\Classes\\ClassifiedAdAutoDeclineEnabledDefinitionType',
      'ClassifiedAdBestOfferEnabledDefinitionType' => 'EbayWsdl\\Classes\\ClassifiedAdBestOfferEnabledDefinitionType',
      'ClassifiedAdCompanyNameEnabledDefinitionType' => 'EbayWsdl\\Classes\\ClassifiedAdCompanyNameEnabledDefinitionType',
      'ClassifiedAdContactByAddressEnabledDefinitionType' => 'EbayWsdl\\Classes\\ClassifiedAdContactByAddressEnabledDefinitionType',
      'ClassifiedAdContactByEmailEnabledDefintionType' => 'EbayWsdl\\Classes\\ClassifiedAdContactByEmailEnabledDefintionType',
      'ClassifiedAdContactByPhoneEnabledDefinitionType' => 'EbayWsdl\\Classes\\ClassifiedAdContactByPhoneEnabledDefinitionType',
      'ClassifiedAdCounterOfferEnabledDefinitionType' => 'EbayWsdl\\Classes\\ClassifiedAdCounterOfferEnabledDefinitionType',
      'ClassifiedAdPayPerLeadEnabledDefinitionType' => 'EbayWsdl\\Classes\\ClassifiedAdPayPerLeadEnabledDefinitionType',
      'ClassifiedAdPaymentMethodEnabledDefinitionType' => 'EbayWsdl\\Classes\\ClassifiedAdPaymentMethodEnabledDefinitionType',
      'ClassifiedAdPhoneCountDefinitionType' => 'EbayWsdl\\Classes\\ClassifiedAdPhoneCountDefinitionType',
      'ClassifiedAdShippingMethodEnabledDefinitionType' => 'EbayWsdl\\Classes\\ClassifiedAdShippingMethodEnabledDefinitionType',
      'ClassifiedAdStreetCountDefinitionType' => 'EbayWsdl\\Classes\\ClassifiedAdStreetCountDefinitionType',
      'CombinedFixedPriceTreatmentEnabledDefinitionType' => 'EbayWsdl\\Classes\\CombinedFixedPriceTreatmentEnabledDefinitionType',
      'CombinedPaymentPreferencesType' => 'EbayWsdl\\Classes\\CombinedPaymentPreferencesType',
      'CompatibleVehicleTypeDefinitionType' => 'EbayWsdl\\Classes\\CompatibleVehicleTypeDefinitionType',
      'ConditionEnabledDefinitionType' => 'EbayWsdl\\Classes\\ConditionEnabledDefinitionType',
      'ConditionType' => 'EbayWsdl\\Classes\\ConditionType',
      'ConditionValuesDefinitionType' => 'EbayWsdl\\Classes\\ConditionValuesDefinitionType',
      'ConditionValuesType' => 'EbayWsdl\\Classes\\ConditionValuesType',
      'ContactHoursDetailsType' => 'EbayWsdl\\Classes\\ContactHoursDetailsType',
      'ContextSearchAssetType' => 'EbayWsdl\\Classes\\ContextSearchAssetType',
      'CountryDetailsType' => 'EbayWsdl\\Classes\\CountryDetailsType',
      'CrossBorderTradeAustraliaEnabledDefinitionType' => 'EbayWsdl\\Classes\\CrossBorderTradeAustraliaEnabledDefinitionType',
      'CrossBorderTradeGBEnabledDefinitionType' => 'EbayWsdl\\Classes\\CrossBorderTradeGBEnabledDefinitionType',
      'CrossBorderTradeNorthAmericaEnabledDefinitionType' => 'EbayWsdl\\Classes\\CrossBorderTradeNorthAmericaEnabledDefinitionType',
      'CrossPromotionPreferencesType' => 'EbayWsdl\\Classes\\CrossPromotionPreferencesType',
      'CrossPromotionsType' => 'EbayWsdl\\Classes\\CrossPromotionsType',
      'CurrencyDetailsType' => 'EbayWsdl\\Classes\\CurrencyDetailsType',
      'DataElementSetType' => 'EbayWsdl\\Classes\\DataElementSetType',
      'DateType' => 'EbayWsdl\\Classes\\DateType',
      'DeliveryURLDetailType' => 'EbayWsdl\\Classes\\DeliveryURLDetailType',
      'DepositSupportedDefinitionType' => 'EbayWsdl\\Classes\\DepositSupportedDefinitionType',
      'DescriptionTemplateType' => 'EbayWsdl\\Classes\\DescriptionTemplateType',
      'DiscountPriceInfoType' => 'EbayWsdl\\Classes\\DiscountPriceInfoType',
      'DiscountProfileType' => 'EbayWsdl\\Classes\\DiscountProfileType',
      'DispatchCutoffTimePreferencesType' => 'EbayWsdl\\Classes\\DispatchCutoffTimePreferencesType',
      'DispatchTimeMaxDetailsType' => 'EbayWsdl\\Classes\\DispatchTimeMaxDetailsType',
      'DisputeArrayType' => 'EbayWsdl\\Classes\\DisputeArrayType',
      'DisputeType' => 'EbayWsdl\\Classes\\DisputeType',
      'DistanceType' => 'EbayWsdl\\Classes\\DistanceType',
      'DutchBINEnabledDefinitionType' => 'EbayWsdl\\Classes\\DutchBINEnabledDefinitionType',
      'EANIdentifierEnabledDefinitionType' => 'EbayWsdl\\Classes\\EANIdentifierEnabledDefinitionType',
      'EndItemRequestContainerType' => 'EbayWsdl\\Classes\\EndItemRequestContainerType',
      'EndItemResponseContainerType' => 'EbayWsdl\\Classes\\EndItemResponseContainerType',
      'EndOfAuctionEmailPreferencesType' => 'EbayWsdl\\Classes\\EndOfAuctionEmailPreferencesType',
      'ExcludeShippingLocationDetailsType' => 'EbayWsdl\\Classes\\ExcludeShippingLocationDetailsType',
      'ExpressConditionRequiredDefinitionType' => 'EbayWsdl\\Classes\\ExpressConditionRequiredDefinitionType',
      'ExpressEnabledDefinitionType' => 'EbayWsdl\\Classes\\ExpressEnabledDefinitionType',
      'ExpressItemRequirementsType' => 'EbayWsdl\\Classes\\ExpressItemRequirementsType',
      'ExpressPicturesRequiredDefinitionType' => 'EbayWsdl\\Classes\\ExpressPicturesRequiredDefinitionType',
      'ExtendedContactDetailsType' => 'EbayWsdl\\Classes\\ExtendedContactDetailsType',
      'ExtendedProductFinderIDType' => 'EbayWsdl\\Classes\\ExtendedProductFinderIDType',
      'ExternalAlertIDArrayType' => 'EbayWsdl\\Classes\\ExternalAlertIDArrayType',
      'ExternalProductIDType' => 'EbayWsdl\\Classes\\ExternalProductIDType',
      'ExternalTransactionType' => 'EbayWsdl\\Classes\\ExternalTransactionType',
      'FeatureDefinitionsType' => 'EbayWsdl\\Classes\\FeatureDefinitionsType',
      'FeatureEligibilityType' => 'EbayWsdl\\Classes\\FeatureEligibilityType',
      'FeeType' => 'EbayWsdl\\Classes\\FeeType',
      'FeedbackCommentArrayType' => 'EbayWsdl\\Classes\\FeedbackCommentArrayType',
      'FeedbackDetailArrayType' => 'EbayWsdl\\Classes\\FeedbackDetailArrayType',
      'FeedbackDetailType' => 'EbayWsdl\\Classes\\FeedbackDetailType',
      'FeedbackInfoType' => 'EbayWsdl\\Classes\\FeedbackInfoType',
      'FeedbackPeriodArrayType' => 'EbayWsdl\\Classes\\FeedbackPeriodArrayType',
      'FeedbackPeriodType' => 'EbayWsdl\\Classes\\FeedbackPeriodType',
      'FeedbackRequirementsType' => 'EbayWsdl\\Classes\\FeedbackRequirementsType',
      'FeedbackSummaryType' => 'EbayWsdl\\Classes\\FeedbackSummaryType',
      'FeesType' => 'EbayWsdl\\Classes\\FeesType',
      'FlatRateInsuranceRangeCostType' => 'EbayWsdl\\Classes\\FlatRateInsuranceRangeCostType',
      'FlatShippingDiscountType' => 'EbayWsdl\\Classes\\FlatShippingDiscountType',
      'FlatShippingPreferencesType' => 'EbayWsdl\\Classes\\FlatShippingPreferencesType',
      'FreeGalleryPlusEnabledDefinitionType' => 'EbayWsdl\\Classes\\FreeGalleryPlusEnabledDefinitionType',
      'FreePicturePackEnabledDefinitionType' => 'EbayWsdl\\Classes\\FreePicturePackEnabledDefinitionType',
      'GetRecommendationsRequestContainerType' => 'EbayWsdl\\Classes\\GetRecommendationsRequestContainerType',
      'GetRecommendationsResponseContainerType' => 'EbayWsdl\\Classes\\GetRecommendationsResponseContainerType',
      'GlobalShippingEnabledDefinitionType' => 'EbayWsdl\\Classes\\GlobalShippingEnabledDefinitionType',
      'Group1MaxFlatShippingCostDefinitionType' => 'EbayWsdl\\Classes\\Group1MaxFlatShippingCostDefinitionType',
      'Group2MaxFlatShippingCostDefinitionType' => 'EbayWsdl\\Classes\\Group2MaxFlatShippingCostDefinitionType',
      'Group3MaxFlatShippingCostDefinitionType' => 'EbayWsdl\\Classes\\Group3MaxFlatShippingCostDefinitionType',
      'HandlingTimeEnabledDefinitionType' => 'EbayWsdl\\Classes\\HandlingTimeEnabledDefinitionType',
      'HistogramEntryType' => 'EbayWsdl\\Classes\\HistogramEntryType',
      'HomePageFeaturedEnabledDefinitionType' => 'EbayWsdl\\Classes\\HomePageFeaturedEnabledDefinitionType',
      'INEscrowWorkflowTimelineDefinitionType' => 'EbayWsdl\\Classes\\INEscrowWorkflowTimelineDefinitionType',
      'ISBNIdentifierEnabledDefinitionType' => 'EbayWsdl\\Classes\\ISBNIdentifierEnabledDefinitionType',
      'InsuranceDetailsType' => 'EbayWsdl\\Classes\\InsuranceDetailsType',
      'IntegratedMerchantCreditCardInfoType' => 'EbayWsdl\\Classes\\IntegratedMerchantCreditCardInfoType',
      'InternationalShippingServiceOptionsType' => 'EbayWsdl\\Classes\\InternationalShippingServiceOptionsType',
      'InventoryFeesType' => 'EbayWsdl\\Classes\\InventoryFeesType',
      'InventoryStatusType' => 'EbayWsdl\\Classes\\InventoryStatusType',
      'ItemArrayType' => 'EbayWsdl\\Classes\\ItemArrayType',
      'ItemBestOffersArrayType' => 'EbayWsdl\\Classes\\ItemBestOffersArrayType',
      'ItemBestOffersType' => 'EbayWsdl\\Classes\\ItemBestOffersType',
      'ItemBidDetailsType' => 'EbayWsdl\\Classes\\ItemBidDetailsType',
      'ItemCompatibilityEnabledDefinitionType' => 'EbayWsdl\\Classes\\ItemCompatibilityEnabledDefinitionType',
      'ItemCompatibilityListType' => 'EbayWsdl\\Classes\\ItemCompatibilityListType',
      'ItemCompatibilityType' => 'EbayWsdl\\Classes\\ItemCompatibilityType',
      'ItemIDArrayType' => 'EbayWsdl\\Classes\\ItemIDArrayType',
      'ItemListCustomizationType' => 'EbayWsdl\\Classes\\ItemListCustomizationType',
      'ItemPolicyViolationType' => 'EbayWsdl\\Classes\\ItemPolicyViolationType',
      'ItemRatingDetailArrayType' => 'EbayWsdl\\Classes\\ItemRatingDetailArrayType',
      'ItemRatingDetailsType' => 'EbayWsdl\\Classes\\ItemRatingDetailsType',
      'ItemSpecificDetailsType' => 'EbayWsdl\\Classes\\ItemSpecificDetailsType',
      'ItemSpecificsEnabledDefinitionType' => 'EbayWsdl\\Classes\\ItemSpecificsEnabledDefinitionType',
      'ItemTotalsType' => 'EbayWsdl\\Classes\\ItemTotalsType',
      'ItemTransactionIDArrayType' => 'EbayWsdl\\Classes\\ItemTransactionIDArrayType',
      'ItemTransactionIDType' => 'EbayWsdl\\Classes\\ItemTransactionIDType',
      'ItemType' => 'EbayWsdl\\Classes\\ItemType',
      'ItemsCanceledEventType' => 'EbayWsdl\\Classes\\ItemsCanceledEventType',
      'LabelType' => 'EbayWsdl\\Classes\\LabelType',
      'LineItemType' => 'EbayWsdl\\Classes\\LineItemType',
      'ListingAnalyzerRecommendationsType' => 'EbayWsdl\\Classes\\ListingAnalyzerRecommendationsType',
      'ListingCheckoutRedirectPreferenceType' => 'EbayWsdl\\Classes\\ListingCheckoutRedirectPreferenceType',
      'ListingDesignerType' => 'EbayWsdl\\Classes\\ListingDesignerType',
      'ListingDetailsType' => 'EbayWsdl\\Classes\\ListingDetailsType',
      'ListingDurationDefinitionType' => 'EbayWsdl\\Classes\\ListingDurationDefinitionType',
      'ListingDurationDefinitionsType' => 'EbayWsdl\\Classes\\ListingDurationDefinitionsType',
      'ListingDurationReferenceType' => 'EbayWsdl\\Classes\\ListingDurationReferenceType',
      'ListingEnhancementDurationDefinitionType' => 'EbayWsdl\\Classes\\ListingEnhancementDurationDefinitionType',
      'ListingEnhancementDurationReferenceType' => 'EbayWsdl\\Classes\\ListingEnhancementDurationReferenceType',
      'ListingFeatureDetailsType' => 'EbayWsdl\\Classes\\ListingFeatureDetailsType',
      'ListingRecommendationType' => 'EbayWsdl\\Classes\\ListingRecommendationType',
      'ListingRecommendationsType' => 'EbayWsdl\\Classes\\ListingRecommendationsType',
      'ListingStartPriceDetailsType' => 'EbayWsdl\\Classes\\ListingStartPriceDetailsType',
      'ListingTipArrayType' => 'EbayWsdl\\Classes\\ListingTipArrayType',
      'ListingTipFieldType' => 'EbayWsdl\\Classes\\ListingTipFieldType',
      'ListingTipMessageType' => 'EbayWsdl\\Classes\\ListingTipMessageType',
      'ListingTipType' => 'EbayWsdl\\Classes\\ListingTipType',
      'LocalListingDistancesNonSubscriptionDefinitionType' => 'EbayWsdl\\Classes\\LocalListingDistancesNonSubscriptionDefinitionType',
      'LocalListingDistancesRegularDefinitionType' => 'EbayWsdl\\Classes\\LocalListingDistancesRegularDefinitionType',
      'LocalListingDistancesSpecialtyDefinitionType' => 'EbayWsdl\\Classes\\LocalListingDistancesSpecialtyDefinitionType',
      'LocalMarketAdFormatEnabledDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketAdFormatEnabledDefinitionType',
      'LocalMarketAutoAcceptEnabledDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketAutoAcceptEnabledDefinitionType',
      'LocalMarketAutoDeclineEnabledDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketAutoDeclineEnabledDefinitionType',
      'LocalMarketBestOfferEnabledDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketBestOfferEnabledDefinitionType',
      'LocalMarketCompanyNameEnabledDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketCompanyNameEnabledDefinitionType',
      'LocalMarketContactByAddressEnabledDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketContactByAddressEnabledDefinitionType',
      'LocalMarketContactByEmailEnabledDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketContactByEmailEnabledDefinitionType',
      'LocalMarketContactByPhoneEnabledDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketContactByPhoneEnabledDefinitionType',
      'LocalMarketCounterOfferEnabledDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketCounterOfferEnabledDefinitionType',
      'LocalMarketNonSubscriptionDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketNonSubscriptionDefinitionType',
      'LocalMarketPaymentMethodCheckOutEnabledDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketPaymentMethodCheckOutEnabledDefinitionType',
      'LocalMarketPhoneCountDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketPhoneCountDefinitionType',
      'LocalMarketPremiumSubscriptionDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketPremiumSubscriptionDefinitionType',
      'LocalMarketRegularSubscriptionDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketRegularSubscriptionDefinitionType',
      'LocalMarketSellerContactDetailsEnabledDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketSellerContactDetailsEnabledDefinitionType',
      'LocalMarketShippingMethodEnabledDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketShippingMethodEnabledDefinitionType',
      'LocalMarketSpecialitySubscriptionDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketSpecialitySubscriptionDefinitionType',
      'LocalMarketStreetCountDefinitionType' => 'EbayWsdl\\Classes\\LocalMarketStreetCountDefinitionType',
      'LocalSearchType' => 'EbayWsdl\\Classes\\LocalSearchType',
      'LookupAttributeArrayType' => 'EbayWsdl\\Classes\\LookupAttributeArrayType',
      'LookupAttributeType' => 'EbayWsdl\\Classes\\LookupAttributeType',
      'MarkUpMarkDownEventType' => 'EbayWsdl\\Classes\\MarkUpMarkDownEventType',
      'MarkUpMarkDownHistoryType' => 'EbayWsdl\\Classes\\MarkUpMarkDownHistoryType',
      'MaxFlatShippingCostCBTExemptDefinitionType' => 'EbayWsdl\\Classes\\MaxFlatShippingCostCBTExemptDefinitionType',
      'MaxFlatShippingCostDefinitionType' => 'EbayWsdl\\Classes\\MaxFlatShippingCostDefinitionType',
      'MaxGranularFitmentCountDefinitionType' => 'EbayWsdl\\Classes\\MaxGranularFitmentCountDefinitionType',
      'MaxItemCompatibilityDefinitionType' => 'EbayWsdl\\Classes\\MaxItemCompatibilityDefinitionType',
      'MaximumBuyerPolicyViolationsDetailsType' => 'EbayWsdl\\Classes\\MaximumBuyerPolicyViolationsDetailsType',
      'MaximumBuyerPolicyViolationsType' => 'EbayWsdl\\Classes\\MaximumBuyerPolicyViolationsType',
      'MaximumItemRequirementsDetailsType' => 'EbayWsdl\\Classes\\MaximumItemRequirementsDetailsType',
      'MaximumItemRequirementsType' => 'EbayWsdl\\Classes\\MaximumItemRequirementsType',
      'MaximumUnpaidItemStrikesCountDetailsType' => 'EbayWsdl\\Classes\\MaximumUnpaidItemStrikesCountDetailsType',
      'MaximumUnpaidItemStrikesDurationDetailsType' => 'EbayWsdl\\Classes\\MaximumUnpaidItemStrikesDurationDetailsType',
      'MaximumUnpaidItemStrikesInfoDetailsType' => 'EbayWsdl\\Classes\\MaximumUnpaidItemStrikesInfoDetailsType',
      'MaximumUnpaidItemStrikesInfoType' => 'EbayWsdl\\Classes\\MaximumUnpaidItemStrikesInfoType',
      'MemberMessageExchangeArrayType' => 'EbayWsdl\\Classes\\MemberMessageExchangeArrayType',
      'MemberMessageExchangeType' => 'EbayWsdl\\Classes\\MemberMessageExchangeType',
      'MemberMessageType' => 'EbayWsdl\\Classes\\MemberMessageType',
      'MessageMediaType' => 'EbayWsdl\\Classes\\MessageMediaType',
      'MinItemCompatibilityDefinitionType' => 'EbayWsdl\\Classes\\MinItemCompatibilityDefinitionType',
      'MinimumFeedbackScoreDetailsType' => 'EbayWsdl\\Classes\\MinimumFeedbackScoreDetailsType',
      'MinimumReservePriceDefinitionType' => 'EbayWsdl\\Classes\\MinimumReservePriceDefinitionType',
      'ModifyNameArrayType' => 'EbayWsdl\\Classes\\ModifyNameArrayType',
      'ModifyNameType' => 'EbayWsdl\\Classes\\ModifyNameType',
      'MotorsLocalMarketEnabledDefinitionType' => 'EbayWsdl\\Classes\\MotorsLocalMarketEnabledDefinitionType',
      'MultiLegShipmentType' => 'EbayWsdl\\Classes\\MultiLegShipmentType',
      'MultiLegShippingDetailsType' => 'EbayWsdl\\Classes\\MultiLegShippingDetailsType',
      'MultiLegShippingServiceType' => 'EbayWsdl\\Classes\\MultiLegShippingServiceType',
      'MyMessagesAlertArrayType' => 'EbayWsdl\\Classes\\MyMessagesAlertArrayType',
      'MyMessagesAlertIDArrayType' => 'EbayWsdl\\Classes\\MyMessagesAlertIDArrayType',
      'MyMessagesAlertType' => 'EbayWsdl\\Classes\\MyMessagesAlertType',
      'MyMessagesExternalMessageIDArrayType' => 'EbayWsdl\\Classes\\MyMessagesExternalMessageIDArrayType',
      'MyMessagesFolderSummaryType' => 'EbayWsdl\\Classes\\MyMessagesFolderSummaryType',
      'MyMessagesFolderType' => 'EbayWsdl\\Classes\\MyMessagesFolderType',
      'MyMessagesForwardDetailsType' => 'EbayWsdl\\Classes\\MyMessagesForwardDetailsType',
      'MyMessagesMessageArrayType' => 'EbayWsdl\\Classes\\MyMessagesMessageArrayType',
      'MyMessagesMessageIDArrayType' => 'EbayWsdl\\Classes\\MyMessagesMessageIDArrayType',
      'MyMessagesMessageType' => 'EbayWsdl\\Classes\\MyMessagesMessageType',
      'MyMessagesResponseDetailsType' => 'EbayWsdl\\Classes\\MyMessagesResponseDetailsType',
      'MyMessagesSummaryType' => 'EbayWsdl\\Classes\\MyMessagesSummaryType',
      'MyeBayFavoriteSearchListType' => 'EbayWsdl\\Classes\\MyeBayFavoriteSearchListType',
      'MyeBayFavoriteSearchType' => 'EbayWsdl\\Classes\\MyeBayFavoriteSearchType',
      'MyeBayFavoriteSellerListType' => 'EbayWsdl\\Classes\\MyeBayFavoriteSellerListType',
      'MyeBayFavoriteSellerType' => 'EbayWsdl\\Classes\\MyeBayFavoriteSellerType',
      'MyeBaySecondChanceOfferListType' => 'EbayWsdl\\Classes\\MyeBaySecondChanceOfferListType',
      'MyeBaySelectionType' => 'EbayWsdl\\Classes\\MyeBaySelectionType',
      'MyeBaySellingSummaryType' => 'EbayWsdl\\Classes\\MyeBaySellingSummaryType',
      'NameRecommendationType' => 'EbayWsdl\\Classes\\NameRecommendationType',
      'NameValueListArrayType' => 'EbayWsdl\\Classes\\NameValueListArrayType',
      'NameValueListType' => 'EbayWsdl\\Classes\\NameValueListType',
      'NameValueRelationshipType' => 'EbayWsdl\\Classes\\NameValueRelationshipType',
      'NonProfitAddressType' => 'EbayWsdl\\Classes\\NonProfitAddressType',
      'NonSubscriptionDefinitionType' => 'EbayWsdl\\Classes\\NonSubscriptionDefinitionType',
      'NotificationDetailsArrayType' => 'EbayWsdl\\Classes\\NotificationDetailsArrayType',
      'NotificationDetailsType' => 'EbayWsdl\\Classes\\NotificationDetailsType',
      'NotificationEnableArrayType' => 'EbayWsdl\\Classes\\NotificationEnableArrayType',
      'NotificationEnableType' => 'EbayWsdl\\Classes\\NotificationEnableType',
      'NotificationEventPropertyType' => 'EbayWsdl\\Classes\\NotificationEventPropertyType',
      'NotificationMessageType' => 'EbayWsdl\\Classes\\NotificationMessageType',
      'NotificationStatisticsType' => 'EbayWsdl\\Classes\\NotificationStatisticsType',
      'NotificationUserDataType' => 'EbayWsdl\\Classes\\NotificationUserDataType',
      'NumberOfPolicyViolationsDetailsType' => 'EbayWsdl\\Classes\\NumberOfPolicyViolationsDetailsType',
      'OfferArrayType' => 'EbayWsdl\\Classes\\OfferArrayType',
      'OfferType' => 'EbayWsdl\\Classes\\OfferType',
      'OrderArrayType' => 'EbayWsdl\\Classes\\OrderArrayType',
      'OrderIDArrayType' => 'EbayWsdl\\Classes\\OrderIDArrayType',
      'OrderTransactionArrayType' => 'EbayWsdl\\Classes\\OrderTransactionArrayType',
      'OrderTransactionType' => 'EbayWsdl\\Classes\\OrderTransactionType',
      'OrderType' => 'EbayWsdl\\Classes\\OrderType',
      'PaginatedItemArrayType' => 'EbayWsdl\\Classes\\PaginatedItemArrayType',
      'PaginatedOrderTransactionArrayType' => 'EbayWsdl\\Classes\\PaginatedOrderTransactionArrayType',
      'PaginatedTransactionArrayType' => 'EbayWsdl\\Classes\\PaginatedTransactionArrayType',
      'PaginationResultType' => 'EbayWsdl\\Classes\\PaginationResultType',
      'PaisaPayFullEscrowEnabledDefinitionType' => 'EbayWsdl\\Classes\\PaisaPayFullEscrowEnabledDefinitionType',
      'PayPalBuyerProtectionEnabledDefinitionType' => 'EbayWsdl\\Classes\\PayPalBuyerProtectionEnabledDefinitionType',
      'PayPalRequiredDefinitionType' => 'EbayWsdl\\Classes\\PayPalRequiredDefinitionType',
      'PayPalRequiredForStoreOwnerDefinitionType' => 'EbayWsdl\\Classes\\PayPalRequiredForStoreOwnerDefinitionType',
      'PaymentDetailsType' => 'EbayWsdl\\Classes\\PaymentDetailsType',
      'PaymentHoldDetailType' => 'EbayWsdl\\Classes\\PaymentHoldDetailType',
      'PaymentInformationCodeType' => 'EbayWsdl\\Classes\\PaymentInformationCodeType',
      'PaymentInformationType' => 'EbayWsdl\\Classes\\PaymentInformationType',
      'PaymentMethodDefinitionType' => 'EbayWsdl\\Classes\\PaymentMethodDefinitionType',
      'PaymentOptionDetailsType' => 'EbayWsdl\\Classes\\PaymentOptionDetailsType',
      'PaymentOptionsGroupEnabledDefinitionType' => 'EbayWsdl\\Classes\\PaymentOptionsGroupEnabledDefinitionType',
      'PaymentTransactionCodeType' => 'EbayWsdl\\Classes\\PaymentTransactionCodeType',
      'PaymentTransactionType' => 'EbayWsdl\\Classes\\PaymentTransactionType',
      'PaymentsInformationCodeType' => 'EbayWsdl\\Classes\\PaymentsInformationCodeType',
      'PaymentsInformationType' => 'EbayWsdl\\Classes\\PaymentsInformationType',
      'PerformanceDashboardType' => 'EbayWsdl\\Classes\\PerformanceDashboardType',
      'PickupDetailsType' => 'EbayWsdl\\Classes\\PickupDetailsType',
      'PickupInStoreDetailsType' => 'EbayWsdl\\Classes\\PickupInStoreDetailsType',
      'PickupMethodSelectedType' => 'EbayWsdl\\Classes\\PickupMethodSelectedType',
      'PickupOptionsType' => 'EbayWsdl\\Classes\\PickupOptionsType',
      'PictureDetailsType' => 'EbayWsdl\\Classes\\PictureDetailsType',
      'PictureManagerDetailsType' => 'EbayWsdl\\Classes\\PictureManagerDetailsType',
      'PictureManagerFolderType' => 'EbayWsdl\\Classes\\PictureManagerFolderType',
      'PictureManagerPictureDisplayType' => 'EbayWsdl\\Classes\\PictureManagerPictureDisplayType',
      'PictureManagerPictureType' => 'EbayWsdl\\Classes\\PictureManagerPictureType',
      'PictureManagerSubscriptionType' => 'EbayWsdl\\Classes\\PictureManagerSubscriptionType',
      'PictureSetMemberType' => 'EbayWsdl\\Classes\\PictureSetMemberType',
      'PicturesType' => 'EbayWsdl\\Classes\\PicturesType',
      'PolicyComplianceDashboardType' => 'EbayWsdl\\Classes\\PolicyComplianceDashboardType',
      'PolicyViolationDurationDetailsType' => 'EbayWsdl\\Classes\\PolicyViolationDurationDetailsType',
      'PowerSellerDashboardType' => 'EbayWsdl\\Classes\\PowerSellerDashboardType',
      'PremiumSubscriptionDefinitionType' => 'EbayWsdl\\Classes\\PremiumSubscriptionDefinitionType',
      'PricingRecommendationsType' => 'EbayWsdl\\Classes\\PricingRecommendationsType',
      'ProPackEnabledDefinitionType' => 'EbayWsdl\\Classes\\ProPackEnabledDefinitionType',
      'ProPackPlusEnabledDefinitionType' => 'EbayWsdl\\Classes\\ProPackPlusEnabledDefinitionType',
      'ProStoresCheckoutPreferenceType' => 'EbayWsdl\\Classes\\ProStoresCheckoutPreferenceType',
      'ProStoresDetailsType' => 'EbayWsdl\\Classes\\ProStoresDetailsType',
      'ProductCreationEnabledDefinitionType' => 'EbayWsdl\\Classes\\ProductCreationEnabledDefinitionType',
      'ProductFamilyType' => 'EbayWsdl\\Classes\\ProductFamilyType',
      'ProductFinderConstraintType' => 'EbayWsdl\\Classes\\ProductFinderConstraintType',
      'ProductInfoType' => 'EbayWsdl\\Classes\\ProductInfoType',
      'ProductListingDetailsType' => 'EbayWsdl\\Classes\\ProductListingDetailsType',
      'ProductRecommendationsType' => 'EbayWsdl\\Classes\\ProductRecommendationsType',
      'ProductSearchPageType' => 'EbayWsdl\\Classes\\ProductSearchPageType',
      'ProductSearchResultType' => 'EbayWsdl\\Classes\\ProductSearchResultType',
      'ProductSearchType' => 'EbayWsdl\\Classes\\ProductSearchType',
      'ProductSuggestionType' => 'EbayWsdl\\Classes\\ProductSuggestionType',
      'ProductSuggestionsType' => 'EbayWsdl\\Classes\\ProductSuggestionsType',
      'ProductType' => 'EbayWsdl\\Classes\\ProductType',
      'ProfileCategoryGroupDefinitionType' => 'EbayWsdl\\Classes\\ProfileCategoryGroupDefinitionType',
      'PromotedItemType' => 'EbayWsdl\\Classes\\PromotedItemType',
      'PromotionDetailsType' => 'EbayWsdl\\Classes\\PromotionDetailsType',
      'PromotionRuleArrayType' => 'EbayWsdl\\Classes\\PromotionRuleArrayType',
      'PromotionRuleType' => 'EbayWsdl\\Classes\\PromotionRuleType',
      'PromotionalSaleArrayType' => 'EbayWsdl\\Classes\\PromotionalSaleArrayType',
      'PromotionalSaleDetailsType' => 'EbayWsdl\\Classes\\PromotionalSaleDetailsType',
      'PromotionalSaleType' => 'EbayWsdl\\Classes\\PromotionalSaleType',
      'PromotionalShippingDiscountDetailsType' => 'EbayWsdl\\Classes\\PromotionalShippingDiscountDetailsType',
      'PurchaseReminderEmailPreferencesType' => 'EbayWsdl\\Classes\\PurchaseReminderEmailPreferencesType',
      'QuantityInfoType' => 'EbayWsdl\\Classes\\QuantityInfoType',
      'QuantityRestrictionPerBuyerInfoType' => 'EbayWsdl\\Classes\\QuantityRestrictionPerBuyerInfoType',
      'RateTableDetailsType' => 'EbayWsdl\\Classes\\RateTableDetailsType',
      'ReasonCodeDetailType' => 'EbayWsdl\\Classes\\ReasonCodeDetailType',
      'RecommendationType' => 'EbayWsdl\\Classes\\RecommendationType',
      'RecommendationValidationRulesType' => 'EbayWsdl\\Classes\\RecommendationValidationRulesType',
      'RecommendationsType' => 'EbayWsdl\\Classes\\RecommendationsType',
      'RecoupmentPolicyConsentType' => 'EbayWsdl\\Classes\\RecoupmentPolicyConsentType',
      'RefundArrayType' => 'EbayWsdl\\Classes\\RefundArrayType',
      'RefundDetailsType' => 'EbayWsdl\\Classes\\RefundDetailsType',
      'RefundFailureReasonType' => 'EbayWsdl\\Classes\\RefundFailureReasonType',
      'RefundFundingSourceArrayType' => 'EbayWsdl\\Classes\\RefundFundingSourceArrayType',
      'RefundFundingSourceType' => 'EbayWsdl\\Classes\\RefundFundingSourceType',
      'RefundInformationType' => 'EbayWsdl\\Classes\\RefundInformationType',
      'RefundLineArrayType' => 'EbayWsdl\\Classes\\RefundLineArrayType',
      'RefundLineType' => 'EbayWsdl\\Classes\\RefundLineType',
      'RefundTransactionArrayType' => 'EbayWsdl\\Classes\\RefundTransactionArrayType',
      'RefundTransactionInfoType' => 'EbayWsdl\\Classes\\RefundTransactionInfoType',
      'RefundTransactionType' => 'EbayWsdl\\Classes\\RefundTransactionType',
      'RefundType' => 'EbayWsdl\\Classes\\RefundType',
      'RegionDetailsType' => 'EbayWsdl\\Classes\\RegionDetailsType',
      'RegionOfOriginDetailsType' => 'EbayWsdl\\Classes\\RegionOfOriginDetailsType',
      'RegularSubscriptionDefinitionType' => 'EbayWsdl\\Classes\\RegularSubscriptionDefinitionType',
      'ReminderCustomizationType' => 'EbayWsdl\\Classes\\ReminderCustomizationType',
      'RemindersType' => 'EbayWsdl\\Classes\\RemindersType',
      'RequiredSellerActionArrayType' => 'EbayWsdl\\Classes\\RequiredSellerActionArrayType',
      'ResponseAttributeSetType' => 'EbayWsdl\\Classes\\ResponseAttributeSetType',
      'RestockingFeeValueDetailsType' => 'EbayWsdl\\Classes\\RestockingFeeValueDetailsType',
      'ReturnPolicyDetailsType' => 'EbayWsdl\\Classes\\ReturnPolicyDetailsType',
      'ReturnPolicyEnabledDefinitionType' => 'EbayWsdl\\Classes\\ReturnPolicyEnabledDefinitionType',
      'ReturnPolicyType' => 'EbayWsdl\\Classes\\ReturnPolicyType',
      'ReturnsAcceptedDetailsType' => 'EbayWsdl\\Classes\\ReturnsAcceptedDetailsType',
      'ReturnsWithinDetailsType' => 'EbayWsdl\\Classes\\ReturnsWithinDetailsType',
      'ReviewDetailsType' => 'EbayWsdl\\Classes\\ReviewDetailsType',
      'ReviewType' => 'EbayWsdl\\Classes\\ReviewType',
      'RevisePriceAllowedDefinitionType' => 'EbayWsdl\\Classes\\RevisePriceAllowedDefinitionType',
      'ReviseQuantityAllowedDefinitionType' => 'EbayWsdl\\Classes\\ReviseQuantityAllowedDefinitionType',
      'ReviseStatusType' => 'EbayWsdl\\Classes\\ReviseStatusType',
      'SIFFTASRecommendationsType' => 'EbayWsdl\\Classes\\SIFFTASRecommendationsType',
      'SKUArrayType' => 'EbayWsdl\\Classes\\SKUArrayType',
      'SMSSubscriptionType' => 'EbayWsdl\\Classes\\SMSSubscriptionType',
      'SafePaymentRequiredDefinitionType' => 'EbayWsdl\\Classes\\SafePaymentRequiredDefinitionType',
      'SalesTaxType' => 'EbayWsdl\\Classes\\SalesTaxType',
      'ScheduleType' => 'EbayWsdl\\Classes\\ScheduleType',
      'SchedulingInfoType' => 'EbayWsdl\\Classes\\SchedulingInfoType',
      'SearchAttributesType' => 'EbayWsdl\\Classes\\SearchAttributesType',
      'SearchDetailsType' => 'EbayWsdl\\Classes\\SearchDetailsType',
      'SearchStandingDashboardType' => 'EbayWsdl\\Classes\\SearchStandingDashboardType',
      'SellerAccountDashboardType' => 'EbayWsdl\\Classes\\SellerAccountDashboardType',
      'SellerContactDetailsEnabledDefinitionType' => 'EbayWsdl\\Classes\\SellerContactDetailsEnabledDefinitionType',
      'SellerDashboardAlertType' => 'EbayWsdl\\Classes\\SellerDashboardAlertType',
      'SellerDiscountsType' => 'EbayWsdl\\Classes\\SellerDiscountsType',
      'SellerDiscountType' => 'EbayWsdl\\Classes\\SellerDiscountType',
      'SellerExcludeShipToLocationPreferencesType' => 'EbayWsdl\\Classes\\SellerExcludeShipToLocationPreferencesType',
      'SellerFavoriteItemPreferencesType' => 'EbayWsdl\\Classes\\SellerFavoriteItemPreferencesType',
      'SellerFeeDiscountDashboardType' => 'EbayWsdl\\Classes\\SellerFeeDiscountDashboardType',
      'SellerPaymentPreferencesType' => 'EbayWsdl\\Classes\\SellerPaymentPreferencesType',
      'SellerPaymentProfileType' => 'EbayWsdl\\Classes\\SellerPaymentProfileType',
      'SellerPaymentType' => 'EbayWsdl\\Classes\\SellerPaymentType',
      'SellerProfilePreferencesType' => 'EbayWsdl\\Classes\\SellerProfilePreferencesType',
      'SellerProfilesType' => 'EbayWsdl\\Classes\\SellerProfilesType',
      'SellerProvidedTitleSupportedDefinitionType' => 'EbayWsdl\\Classes\\SellerProvidedTitleSupportedDefinitionType',
      'SellerRatingSummaryArrayType' => 'EbayWsdl\\Classes\\SellerRatingSummaryArrayType',
      'RecoupmentPolicyDetailsType' => 'EbayWsdl\\Classes\\RecoupmentPolicyDetailsType',
      'SellerReturnPreferencesType' => 'EbayWsdl\\Classes\\SellerReturnPreferencesType',
      'SellerReturnProfileType' => 'EbayWsdl\\Classes\\SellerReturnProfileType',
      'SellerRoleMetricsType' => 'EbayWsdl\\Classes\\SellerRoleMetricsType',
      'SellerShippingProfileType' => 'EbayWsdl\\Classes\\SellerShippingProfileType',
      'SellerType' => 'EbayWsdl\\Classes\\SellerType',
      'SellereBayPaymentProcessConsentCodeType' => 'EbayWsdl\\Classes\\SellereBayPaymentProcessConsentCodeType',
      'SellingManagerAlertType' => 'EbayWsdl\\Classes\\SellingManagerAlertType',
      'SellingManagerAutoListAccordingToScheduleType' => 'EbayWsdl\\Classes\\SellingManagerAutoListAccordingToScheduleType',
      'SellingManagerAutoListMinActiveItemsType' => 'EbayWsdl\\Classes\\SellingManagerAutoListMinActiveItemsType',
      'SellingManagerAutoListType' => 'EbayWsdl\\Classes\\SellingManagerAutoListType',
      'SellingManagerAutoRelistType' => 'EbayWsdl\\Classes\\SellingManagerAutoRelistType',
      'SellingManagerAutoSecondChanceOfferType' => 'EbayWsdl\\Classes\\SellingManagerAutoSecondChanceOfferType',
      'SellingManagerEmailLogType' => 'EbayWsdl\\Classes\\SellingManagerEmailLogType',
      'SellingManagerFolderDetailsType' => 'EbayWsdl\\Classes\\SellingManagerFolderDetailsType',
      'SellingManagerOrderStatusType' => 'EbayWsdl\\Classes\\SellingManagerOrderStatusType',
      'SellingManagerProductDetailsType' => 'EbayWsdl\\Classes\\SellingManagerProductDetailsType',
      'SellingManagerProductInventoryStatusType' => 'EbayWsdl\\Classes\\SellingManagerProductInventoryStatusType',
      'SellingManagerProductSpecificsType' => 'EbayWsdl\\Classes\\SellingManagerProductSpecificsType',
      'SellingManagerProductType' => 'EbayWsdl\\Classes\\SellingManagerProductType',
      'SellingManagerSearchType' => 'EbayWsdl\\Classes\\SellingManagerSearchType',
      'SellingManagerSoldOrderType' => 'EbayWsdl\\Classes\\SellingManagerSoldOrderType',
      'SellingManagerSoldTransactionType' => 'EbayWsdl\\Classes\\SellingManagerSoldTransactionType',
      'SellingManagerTemplateDetailsArrayType' => 'EbayWsdl\\Classes\\SellingManagerTemplateDetailsArrayType',
      'SellingManagerTemplateDetailsType' => 'EbayWsdl\\Classes\\SellingManagerTemplateDetailsType',
      'SellingManagerVendorDetailsType' => 'EbayWsdl\\Classes\\SellingManagerVendorDetailsType',
      'SellingStatusType' => 'EbayWsdl\\Classes\\SellingStatusType',
      'SellingSummaryType' => 'EbayWsdl\\Classes\\SellingSummaryType',
      'ShipPackageDetailsType' => 'EbayWsdl\\Classes\\ShipPackageDetailsType',
      'ShipmentLineItemType' => 'EbayWsdl\\Classes\\ShipmentLineItemType',
      'ShipmentTrackingDetailsType' => 'EbayWsdl\\Classes\\ShipmentTrackingDetailsType',
      'ShipmentType' => 'EbayWsdl\\Classes\\ShipmentType',
      'ShippingCarrierDetailsType' => 'EbayWsdl\\Classes\\ShippingCarrierDetailsType',
      'ShippingCategoryDetailsType' => 'EbayWsdl\\Classes\\ShippingCategoryDetailsType',
      'ShippingCostPaidByDetailsType' => 'EbayWsdl\\Classes\\ShippingCostPaidByDetailsType',
      'ShippingDetailsType' => 'EbayWsdl\\Classes\\ShippingDetailsType',
      'ShippingInsuranceType' => 'EbayWsdl\\Classes\\ShippingInsuranceType',
      'ShippingLocationDetailsType' => 'EbayWsdl\\Classes\\ShippingLocationDetailsType',
      'ShippingPackageDetailsType' => 'EbayWsdl\\Classes\\ShippingPackageDetailsType',
      'ShippingPackageInfoType' => 'EbayWsdl\\Classes\\ShippingPackageInfoType',
      'ShippingServiceCostOverrideListType' => 'EbayWsdl\\Classes\\ShippingServiceCostOverrideListType',
      'ShippingServiceCostOverrideType' => 'EbayWsdl\\Classes\\ShippingServiceCostOverrideType',
      'ShippingServiceDetailsType' => 'EbayWsdl\\Classes\\ShippingServiceDetailsType',
      'ShippingServiceOptionsType' => 'EbayWsdl\\Classes\\ShippingServiceOptionsType',
      'ShippingServicePackageDetailsType' => 'EbayWsdl\\Classes\\ShippingServicePackageDetailsType',
      'ShippingTermRequiredDefinitionType' => 'EbayWsdl\\Classes\\ShippingTermRequiredDefinitionType',
      'SiteBuyerRequirementDetailsType' => 'EbayWsdl\\Classes\\SiteBuyerRequirementDetailsType',
      'SiteDefaultsType' => 'EbayWsdl\\Classes\\SiteDefaultsType',
      'SiteDetailsType' => 'EbayWsdl\\Classes\\SiteDetailsType',
      'SiteHostedPictureDetailsType' => 'EbayWsdl\\Classes\\SiteHostedPictureDetailsType',
      'SiteLocationType' => 'EbayWsdl\\Classes\\SiteLocationType',
      'SiteWideCharacteristicsType' => 'EbayWsdl\\Classes\\SiteWideCharacteristicsType',
      'SkypeMeNonTransactionalEnabledDefinitionType' => 'EbayWsdl\\Classes\\SkypeMeNonTransactionalEnabledDefinitionType',
      'SkypeMeTransactionalEnabledDefinitionType' => 'EbayWsdl\\Classes\\SkypeMeTransactionalEnabledDefinitionType',
      'SpecialitySubscriptionDefinitionType' => 'EbayWsdl\\Classes\\SpecialitySubscriptionDefinitionType',
      'StoreColorSchemeArrayType' => 'EbayWsdl\\Classes\\StoreColorSchemeArrayType',
      'StoreColorSchemeType' => 'EbayWsdl\\Classes\\StoreColorSchemeType',
      'StoreColorType' => 'EbayWsdl\\Classes\\StoreColorType',
      'StoreCustomCategoryArrayType' => 'EbayWsdl\\Classes\\StoreCustomCategoryArrayType',
      'StoreCustomCategoryType' => 'EbayWsdl\\Classes\\StoreCustomCategoryType',
      'StoreCustomListingHeaderLinkType' => 'EbayWsdl\\Classes\\StoreCustomListingHeaderLinkType',
      'StoreCustomListingHeaderType' => 'EbayWsdl\\Classes\\StoreCustomListingHeaderType',
      'StoreCustomPageArrayType' => 'EbayWsdl\\Classes\\StoreCustomPageArrayType',
      'StoreCustomPageType' => 'EbayWsdl\\Classes\\StoreCustomPageType',
      'StoreFontType' => 'EbayWsdl\\Classes\\StoreFontType',
      'StoreInventoryEnabledDefinitionType' => 'EbayWsdl\\Classes\\StoreInventoryEnabledDefinitionType',
      'StoreLogoArrayType' => 'EbayWsdl\\Classes\\StoreLogoArrayType',
      'StoreLogoType' => 'EbayWsdl\\Classes\\StoreLogoType',
      'StoreOwnerExtendedListingDurationsDefinitionType' => 'EbayWsdl\\Classes\\StoreOwnerExtendedListingDurationsDefinitionType',
      'StoreOwnerExtendedListingDurationsEnabledDefinitionType' => 'EbayWsdl\\Classes\\StoreOwnerExtendedListingDurationsEnabledDefinitionType',
      'StoreOwnerExtendedListingDurationsType' => 'EbayWsdl\\Classes\\StoreOwnerExtendedListingDurationsType',
      'StorePreferencesType' => 'EbayWsdl\\Classes\\StorePreferencesType',
      'StoreSubscriptionArrayType' => 'EbayWsdl\\Classes\\StoreSubscriptionArrayType',
      'StoreSubscriptionType' => 'EbayWsdl\\Classes\\StoreSubscriptionType',
      'StoreThemeArrayType' => 'EbayWsdl\\Classes\\StoreThemeArrayType',
      'StoreThemeType' => 'EbayWsdl\\Classes\\StoreThemeType',
      'StoreType' => 'EbayWsdl\\Classes\\StoreType',
      'StoreVacationPreferencesType' => 'EbayWsdl\\Classes\\StoreVacationPreferencesType',
      'StorefrontType' => 'EbayWsdl\\Classes\\StorefrontType',
      'SubscriptionType' => 'EbayWsdl\\Classes\\SubscriptionType',
      'SuggestedCategoryArrayType' => 'EbayWsdl\\Classes\\SuggestedCategoryArrayType',
      'SuggestedCategoryType' => 'EbayWsdl\\Classes\\SuggestedCategoryType',
      'SummaryEventScheduleType' => 'EbayWsdl\\Classes\\SummaryEventScheduleType',
      'SupportedEventTypesArrayType' => 'EbayWsdl\\Classes\\SupportedEventTypesArrayType',
      'SupportedSellerProfileType' => 'EbayWsdl\\Classes\\SupportedSellerProfileType',
      'SupportedSellerProfilesType' => 'EbayWsdl\\Classes\\SupportedSellerProfilesType',
      'TCREnabledDefinitionType' => 'EbayWsdl\\Classes\\TCREnabledDefinitionType',
      'TaxDetailsType' => 'EbayWsdl\\Classes\\TaxDetailsType',
      'TaxJurisdictionType' => 'EbayWsdl\\Classes\\TaxJurisdictionType',
      'TaxTableType' => 'EbayWsdl\\Classes\\TaxTableType',
      'TaxesType' => 'EbayWsdl\\Classes\\TaxesType',
      'ThemeGroupType' => 'EbayWsdl\\Classes\\ThemeGroupType',
      'TicketListingDetailsType' => 'EbayWsdl\\Classes\\TicketListingDetailsType',
      'TimeRangeType' => 'EbayWsdl\\Classes\\TimeRangeType',
      'TimeZoneDetailsType' => 'EbayWsdl\\Classes\\TimeZoneDetailsType',
      'TokenStatusType' => 'EbayWsdl\\Classes\\TokenStatusType',
      'TopRatedSellerDetailsType' => 'EbayWsdl\\Classes\\TopRatedSellerDetailsType',
      'TransactionArrayType' => 'EbayWsdl\\Classes\\TransactionArrayType',
      'TransactionReferenceType' => 'EbayWsdl\\Classes\\TransactionReferenceType',
      'TransactionStatusType' => 'EbayWsdl\\Classes\\TransactionStatusType',
      'TransactionType' => 'EbayWsdl\\Classes\\TransactionType',
      'UPCIdentifierEnabledDefinitionType' => 'EbayWsdl\\Classes\\UPCIdentifierEnabledDefinitionType',
      'URLDetailsType' => 'EbayWsdl\\Classes\\URLDetailsType',
      'UnitInfoType' => 'EbayWsdl\\Classes\\UnitInfoType',
      'UnitOfMeasurementDetailsType' => 'EbayWsdl\\Classes\\UnitOfMeasurementDetailsType',
      'UnitOfMeasurementType' => 'EbayWsdl\\Classes\\UnitOfMeasurementType',
      'UnpaidItemAssistancePreferencesType' => 'EbayWsdl\\Classes\\UnpaidItemAssistancePreferencesType',
      'UnpaidItemType' => 'EbayWsdl\\Classes\\UnpaidItemType',
      'UserAgreementInfoType' => 'EbayWsdl\\Classes\\UserAgreementInfoType',
      'UserConsentRequiredDefinitionType' => 'EbayWsdl\\Classes\\UserConsentRequiredDefinitionType',
      'UserDefinedListType' => 'EbayWsdl\\Classes\\UserDefinedListType',
      'UserIDArrayType' => 'EbayWsdl\\Classes\\UserIDArrayType',
      'UserIdentityType' => 'EbayWsdl\\Classes\\UserIdentityType',
      'UserType' => 'EbayWsdl\\Classes\\UserType',
      'VATDetailsType' => 'EbayWsdl\\Classes\\VATDetailsType',
      'VATRateType' => 'EbayWsdl\\Classes\\VATRateType',
      'VINSupportedDefinitionType' => 'EbayWsdl\\Classes\\VINSupportedDefinitionType',
      'VRMSupportedDefinitionType' => 'EbayWsdl\\Classes\\VRMSupportedDefinitionType',
      'ValType' => 'EbayWsdl\\Classes\\ValType',
      'ValueCategoryDefinitionType' => 'EbayWsdl\\Classes\\ValueCategoryDefinitionType',
      'ValuePackEnabledDefinitionType' => 'EbayWsdl\\Classes\\ValuePackEnabledDefinitionType',
      'ValueRecommendationType' => 'EbayWsdl\\Classes\\ValueRecommendationType',
      'VariationDetailsType' => 'EbayWsdl\\Classes\\VariationDetailsType',
      'VariationKeyType' => 'EbayWsdl\\Classes\\VariationKeyType',
      'VariationSpecificPictureSetType' => 'EbayWsdl\\Classes\\VariationSpecificPictureSetType',
      'VariationType' => 'EbayWsdl\\Classes\\VariationType',
      'VariationsEnabledDefinitionType' => 'EbayWsdl\\Classes\\VariationsEnabledDefinitionType',
      'VariationsType' => 'EbayWsdl\\Classes\\VariationsType',
      'VeROReasonCodeDetailsType' => 'EbayWsdl\\Classes\\VeROReasonCodeDetailsType',
      'VeROReportItemType' => 'EbayWsdl\\Classes\\VeROReportItemType',
      'VeROReportItemsType' => 'EbayWsdl\\Classes\\VeROReportItemsType',
      'VeROReportedItemDetailsType' => 'EbayWsdl\\Classes\\VeROReportedItemDetailsType',
      'VeROReportedItemType' => 'EbayWsdl\\Classes\\VeROReportedItemType',
      'VeROSiteDetailType' => 'EbayWsdl\\Classes\\VeROSiteDetailType',
      'VerifiedUserRequirementsDetailsType' => 'EbayWsdl\\Classes\\VerifiedUserRequirementsDetailsType',
      'VerifiedUserRequirementsType' => 'EbayWsdl\\Classes\\VerifiedUserRequirementsType',
      'WantItNowPostArrayType' => 'EbayWsdl\\Classes\\WantItNowPostArrayType',
      'WantItNowPostType' => 'EbayWsdl\\Classes\\WantItNowPostType',
      'WarrantyDurationDetailsType' => 'EbayWsdl\\Classes\\WarrantyDurationDetailsType',
      'WarrantyOfferedDetailsType' => 'EbayWsdl\\Classes\\WarrantyOfferedDetailsType',
      'WarrantyTypeDetailsType' => 'EbayWsdl\\Classes\\WarrantyTypeDetailsType',
      'XSLFileType' => 'EbayWsdl\\Classes\\XSLFileType',
      'eBayMotorsProAdFormatEnabledDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProAdFormatEnabledDefinitionType',
      'eBayMotorsProAutoAcceptEnabledDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProAutoAcceptEnabledDefinitionType',
      'eBayMotorsProAutoDeclineEnabledDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProAutoDeclineEnabledDefinitionType',
      'eBayMotorsProBestOfferEnabledDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProBestOfferEnabledDefinitionType',
      'eBayMotorsProCompanyNameEnabledDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProCompanyNameEnabledDefinitionType',
      'eBayMotorsProContactByAddressEnabledDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProContactByAddressEnabledDefinitionType',
      'eBayMotorsProContactByEmailEnabledDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProContactByEmailEnabledDefinitionType',
      'eBayMotorsProContactByPhoneEnabledDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProContactByPhoneEnabledDefinitionType',
      'eBayMotorsProCounterOfferEnabledDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProCounterOfferEnabledDefinitionType',
      'eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType',
      'eBayMotorsProPhoneCountDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProPhoneCountDefinitionType',
      'eBayMotorsProSellerContactDetailsEnabledDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProSellerContactDetailsEnabledDefinitionType',
      'eBayMotorsProShippingMethodEnabledDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProShippingMethodEnabledDefinitionType',
      'eBayMotorsProStreetCountDefinitionType' => 'EbayWsdl\\Classes\\eBayMotorsProStreetCountDefinitionType',
      'eBayPaymentMismatchDetailsType' => 'EbayWsdl\\Classes\\eBayPaymentMismatchDetailsType',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://developer.ebay.com/webservices/849/ebaySvc.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param AddDisputeRequestType $AddDisputeRequest
     * @return AddDisputeResponseType
     */
    public function AddDispute(AddDisputeRequestType $AddDisputeRequest)
    {
      return $this->__soapCall('AddDispute', array($AddDisputeRequest));
    }

    /**
     * @param AddDisputeResponseRequestType $AddDisputeResponseRequest
     * @return AddDisputeResponseResponseType
     */
    public function AddDisputeResponse(AddDisputeResponseRequestType $AddDisputeResponseRequest)
    {
      return $this->__soapCall('AddDisputeResponse', array($AddDisputeResponseRequest));
    }

    /**
     * @param AddFixedPriceItemRequestType $AddFixedPriceItemRequest
     * @return AddFixedPriceItemResponseType
     */
    public function AddFixedPriceItem(AddFixedPriceItemRequestType $AddFixedPriceItemRequest)
    {
      return $this->__soapCall('AddFixedPriceItem', array($AddFixedPriceItemRequest));
    }

    /**
     * @param AddItemRequestType $AddItemRequest
     * @return AddItemResponseType
     */
    public function AddItem(AddItemRequestType $AddItemRequest)
    {
      return $this->__soapCall('AddItem', array($AddItemRequest));
    }

    /**
     * @param AddItemFromSellingManagerTemplateRequestType $AddItemFromSellingManagerTemplateRequest
     * @return AddItemFromSellingManagerTemplateResponseType
     */
    public function AddItemFromSellingManagerTemplate(AddItemFromSellingManagerTemplateRequestType $AddItemFromSellingManagerTemplateRequest)
    {
      return $this->__soapCall('AddItemFromSellingManagerTemplate', array($AddItemFromSellingManagerTemplateRequest));
    }

    /**
     * @param AddItemsRequestType $AddItemsRequest
     * @return AddItemsResponseType
     */
    public function AddItems(AddItemsRequestType $AddItemsRequest)
    {
      return $this->__soapCall('AddItems', array($AddItemsRequest));
    }

    /**
     * @param AddMemberMessageAAQToPartnerRequestType $AddMemberMessageAAQToPartnerRequest
     * @return AddMemberMessageAAQToPartnerResponseType
     */
    public function AddMemberMessageAAQToPartner(AddMemberMessageAAQToPartnerRequestType $AddMemberMessageAAQToPartnerRequest)
    {
      return $this->__soapCall('AddMemberMessageAAQToPartner', array($AddMemberMessageAAQToPartnerRequest));
    }

    /**
     * @param AddMemberMessageRTQRequestType $AddMemberMessageRTQRequest
     * @return AddMemberMessageRTQResponseType
     */
    public function AddMemberMessageRTQ(AddMemberMessageRTQRequestType $AddMemberMessageRTQRequest)
    {
      return $this->__soapCall('AddMemberMessageRTQ', array($AddMemberMessageRTQRequest));
    }

    /**
     * @param AddMemberMessagesAAQToBidderRequestType $AddMemberMessagesAAQToBidderRequest
     * @return AddMemberMessagesAAQToBidderResponseType
     */
    public function AddMemberMessagesAAQToBidder(AddMemberMessagesAAQToBidderRequestType $AddMemberMessagesAAQToBidderRequest)
    {
      return $this->__soapCall('AddMemberMessagesAAQToBidder', array($AddMemberMessagesAAQToBidderRequest));
    }

    /**
     * @param AddOrderRequestType $AddOrderRequest
     * @return AddOrderResponseType
     */
    public function AddOrder(AddOrderRequestType $AddOrderRequest)
    {
      return $this->__soapCall('AddOrder', array($AddOrderRequest));
    }

    /**
     * @param AddSecondChanceItemRequestType $AddSecondChanceItemRequest
     * @return AddSecondChanceItemResponseType
     */
    public function AddSecondChanceItem(AddSecondChanceItemRequestType $AddSecondChanceItemRequest)
    {
      return $this->__soapCall('AddSecondChanceItem', array($AddSecondChanceItemRequest));
    }

    /**
     * @param AddSellingManagerInventoryFolderRequestType $AddSellingManagerInventoryFolderRequest
     * @return AddSellingManagerInventoryFolderResponseType
     */
    public function AddSellingManagerInventoryFolder(AddSellingManagerInventoryFolderRequestType $AddSellingManagerInventoryFolderRequest)
    {
      return $this->__soapCall('AddSellingManagerInventoryFolder', array($AddSellingManagerInventoryFolderRequest));
    }

    /**
     * @param AddSellingManagerProductRequestType $AddSellingManagerProductRequest
     * @return AddSellingManagerProductResponseType
     */
    public function AddSellingManagerProduct(AddSellingManagerProductRequestType $AddSellingManagerProductRequest)
    {
      return $this->__soapCall('AddSellingManagerProduct', array($AddSellingManagerProductRequest));
    }

    /**
     * @param AddSellingManagerTemplateRequestType $AddSellingManagerTemplateRequest
     * @return AddSellingManagerTemplateResponseType
     */
    public function AddSellingManagerTemplate(AddSellingManagerTemplateRequestType $AddSellingManagerTemplateRequest)
    {
      return $this->__soapCall('AddSellingManagerTemplate', array($AddSellingManagerTemplateRequest));
    }

    /**
     * @param AddToItemDescriptionRequestType $AddToItemDescriptionRequest
     * @return AddToItemDescriptionResponseType
     */
    public function AddToItemDescription(AddToItemDescriptionRequestType $AddToItemDescriptionRequest)
    {
      return $this->__soapCall('AddToItemDescription', array($AddToItemDescriptionRequest));
    }

    /**
     * @param AddToWatchListRequestType $AddToWatchListRequest
     * @return AddToWatchListResponseType
     */
    public function AddToWatchList(AddToWatchListRequestType $AddToWatchListRequest)
    {
      return $this->__soapCall('AddToWatchList', array($AddToWatchListRequest));
    }

    /**
     * @param AddTransactionConfirmationItemRequestType $AddTransactionConfirmationItemRequest
     * @return AddTransactionConfirmationItemResponseType
     */
    public function AddTransactionConfirmationItem(AddTransactionConfirmationItemRequestType $AddTransactionConfirmationItemRequest)
    {
      return $this->__soapCall('AddTransactionConfirmationItem', array($AddTransactionConfirmationItemRequest));
    }

    /**
     * @param CompleteSaleRequestType $CompleteSaleRequest
     * @return CompleteSaleResponseType
     */
    public function CompleteSale(CompleteSaleRequestType $CompleteSaleRequest)
    {
      return $this->__soapCall('CompleteSale', array($CompleteSaleRequest));
    }

    /**
     * @param ConfirmIdentityRequestType $ConfirmIdentityRequest
     * @return ConfirmIdentityResponseType
     */
    public function ConfirmIdentity(ConfirmIdentityRequestType $ConfirmIdentityRequest)
    {
      return $this->__soapCall('ConfirmIdentity', array($ConfirmIdentityRequest));
    }

    /**
     * @param DeleteMyMessagesRequestType $DeleteMyMessagesRequest
     * @return DeleteMyMessagesResponseType
     */
    public function DeleteMyMessages(DeleteMyMessagesRequestType $DeleteMyMessagesRequest)
    {
      return $this->__soapCall('DeleteMyMessages', array($DeleteMyMessagesRequest));
    }

    /**
     * @param DeleteSellingManagerInventoryFolderRequestType $DeleteSellingManagerInventoryFolderRequest
     * @return DeleteSellingManagerInventoryFolderResponseType
     */
    public function DeleteSellingManagerInventoryFolder(DeleteSellingManagerInventoryFolderRequestType $DeleteSellingManagerInventoryFolderRequest)
    {
      return $this->__soapCall('DeleteSellingManagerInventoryFolder', array($DeleteSellingManagerInventoryFolderRequest));
    }

    /**
     * @param DeleteSellingManagerItemAutomationRuleRequestType $DeleteSellingManagerItemAutomationRuleRequest
     * @return DeleteSellingManagerItemAutomationRuleResponseType
     */
    public function DeleteSellingManagerItemAutomationRule(DeleteSellingManagerItemAutomationRuleRequestType $DeleteSellingManagerItemAutomationRuleRequest)
    {
      return $this->__soapCall('DeleteSellingManagerItemAutomationRule', array($DeleteSellingManagerItemAutomationRuleRequest));
    }

    /**
     * @param DeleteSellingManagerProductRequestType $DeleteSellingManagerProductRequest
     * @return DeleteSellingManagerProductResponseType
     */
    public function DeleteSellingManagerProduct(DeleteSellingManagerProductRequestType $DeleteSellingManagerProductRequest)
    {
      return $this->__soapCall('DeleteSellingManagerProduct', array($DeleteSellingManagerProductRequest));
    }

    /**
     * @param DeleteSellingManagerTemplateRequestType $DeleteSellingManagerTemplateRequest
     * @return DeleteSellingManagerTemplateResponseType
     */
    public function DeleteSellingManagerTemplate(DeleteSellingManagerTemplateRequestType $DeleteSellingManagerTemplateRequest)
    {
      return $this->__soapCall('DeleteSellingManagerTemplate', array($DeleteSellingManagerTemplateRequest));
    }

    /**
     * @param DeleteSellingManagerTemplateAutomationRuleRequestType $DeleteSellingManagerTemplateAutomationRuleRequest
     * @return DeleteSellingManagerTemplateAutomationRuleResponseType
     */
    public function DeleteSellingManagerTemplateAutomationRule(DeleteSellingManagerTemplateAutomationRuleRequestType $DeleteSellingManagerTemplateAutomationRuleRequest)
    {
      return $this->__soapCall('DeleteSellingManagerTemplateAutomationRule', array($DeleteSellingManagerTemplateAutomationRuleRequest));
    }

    /**
     * @param DisableUnpaidItemAssistanceRequestType $DisableUnpaidItemAssistanceRequest
     * @return DisableUnpaidItemAssistanceResponseType
     */
    public function DisableUnpaidItemAssistance(DisableUnpaidItemAssistanceRequestType $DisableUnpaidItemAssistanceRequest)
    {
      return $this->__soapCall('DisableUnpaidItemAssistance', array($DisableUnpaidItemAssistanceRequest));
    }

    /**
     * @param EndFixedPriceItemRequestType $EndFixedPriceItemRequest
     * @return EndFixedPriceItemResponseType
     */
    public function EndFixedPriceItem(EndFixedPriceItemRequestType $EndFixedPriceItemRequest)
    {
      return $this->__soapCall('EndFixedPriceItem', array($EndFixedPriceItemRequest));
    }

    /**
     * @param EndItemRequestType $EndItemRequest
     * @return EndItemResponseType
     */
    public function EndItem(EndItemRequestType $EndItemRequest)
    {
      return $this->__soapCall('EndItem', array($EndItemRequest));
    }

    /**
     * @param EndItemsRequestType $EndItemsRequest
     * @return EndItemsResponseType
     */
    public function EndItems(EndItemsRequestType $EndItemsRequest)
    {
      return $this->__soapCall('EndItems', array($EndItemsRequest));
    }

    /**
     * @param ExtendSiteHostedPicturesRequestType $ExtendSiteHostedPicturesRequest
     * @return ExtendSiteHostedPicturesResponseType
     */
    public function ExtendSiteHostedPictures(ExtendSiteHostedPicturesRequestType $ExtendSiteHostedPicturesRequest)
    {
      return $this->__soapCall('ExtendSiteHostedPictures', array($ExtendSiteHostedPicturesRequest));
    }

    /**
     * @param FetchTokenRequestType $FetchTokenRequest
     * @return FetchTokenResponseType
     */
    public function FetchToken(FetchTokenRequestType $FetchTokenRequest)
    {
      return $this->__soapCall('FetchToken', array($FetchTokenRequest));
    }

    /**
     * @param GetAccountRequestType $GetAccountRequest
     * @return GetAccountResponseType
     */
    public function GetAccount(GetAccountRequestType $GetAccountRequest)
    {
      return $this->__soapCall('GetAccount', array($GetAccountRequest));
    }

    /**
     * @param GetAdFormatLeadsRequestType $GetAdFormatLeadsRequest
     * @return GetAdFormatLeadsResponseType
     */
    public function GetAdFormatLeads(GetAdFormatLeadsRequestType $GetAdFormatLeadsRequest)
    {
      return $this->__soapCall('GetAdFormatLeads', array($GetAdFormatLeadsRequest));
    }

    /**
     * @param GetAllBiddersRequestType $GetAllBiddersRequest
     * @return GetAllBiddersResponseType
     */
    public function GetAllBidders(GetAllBiddersRequestType $GetAllBiddersRequest)
    {
      return $this->__soapCall('GetAllBidders', array($GetAllBiddersRequest));
    }

    /**
     * @param GetApiAccessRulesRequestType $GetApiAccessRulesRequest
     * @return GetApiAccessRulesResponseType
     */
    public function GetApiAccessRules(GetApiAccessRulesRequestType $GetApiAccessRulesRequest)
    {
      return $this->__soapCall('GetApiAccessRules', array($GetApiAccessRulesRequest));
    }

    /**
     * @param GetAttributesCSRequestType $GetAttributesCSRequest
     * @return GetAttributesCSResponseType
     */
    public function GetAttributesCS(GetAttributesCSRequestType $GetAttributesCSRequest)
    {
      return $this->__soapCall('GetAttributesCS', array($GetAttributesCSRequest));
    }

    /**
     * @param GetAttributesXSLRequestType $GetAttributesXSLRequest
     * @return GetAttributesXSLResponseType
     */
    public function GetAttributesXSL(GetAttributesXSLRequestType $GetAttributesXSLRequest)
    {
      return $this->__soapCall('GetAttributesXSL', array($GetAttributesXSLRequest));
    }

    /**
     * @param GetBestOffersRequestType $GetBestOffersRequest
     * @return GetBestOffersResponseType
     */
    public function GetBestOffers(GetBestOffersRequestType $GetBestOffersRequest)
    {
      return $this->__soapCall('GetBestOffers', array($GetBestOffersRequest));
    }

    /**
     * @param GetBidderListRequestType $GetBidderListRequest
     * @return GetBidderListResponseType
     */
    public function GetBidderList(GetBidderListRequestType $GetBidderListRequest)
    {
      return $this->__soapCall('GetBidderList', array($GetBidderListRequest));
    }

    /**
     * @param GetCategoriesRequestType $GetCategoriesRequest
     * @return GetCategoriesResponseType
     */
    public function GetCategories(GetCategoriesRequestType $GetCategoriesRequest)
    {
      return $this->__soapCall('GetCategories', array($GetCategoriesRequest));
    }

    /**
     * @param GetCategory2CSRequestType $GetCategory2CSRequest
     * @return GetCategory2CSResponseType
     */
    public function GetCategory2CS(GetCategory2CSRequestType $GetCategory2CSRequest)
    {
      return $this->__soapCall('GetCategory2CS', array($GetCategory2CSRequest));
    }

    /**
     * @param GetCategoryFeaturesRequestType $GetCategoryFeaturesRequest
     * @return GetCategoryFeaturesResponseType
     */
    public function GetCategoryFeatures(GetCategoryFeaturesRequestType $GetCategoryFeaturesRequest)
    {
      return $this->__soapCall('GetCategoryFeatures', array($GetCategoryFeaturesRequest));
    }

    /**
     * @param GetCategoryMappingsRequestType $GetCategoryMappingsRequest
     * @return GetCategoryMappingsResponseType
     */
    public function GetCategoryMappings(GetCategoryMappingsRequestType $GetCategoryMappingsRequest)
    {
      return $this->__soapCall('GetCategoryMappings', array($GetCategoryMappingsRequest));
    }

    /**
     * @param GetCategorySpecificsRequestType $GetCategorySpecificsRequest
     * @return GetCategorySpecificsResponseType
     */
    public function GetCategorySpecifics(GetCategorySpecificsRequestType $GetCategorySpecificsRequest)
    {
      return $this->__soapCall('GetCategorySpecifics', array($GetCategorySpecificsRequest));
    }

    /**
     * @param GetChallengeTokenRequestType $GetChallengeTokenRequest
     * @return GetChallengeTokenResponseType
     */
    public function GetChallengeToken(GetChallengeTokenRequestType $GetChallengeTokenRequest)
    {
      return $this->__soapCall('GetChallengeToken', array($GetChallengeTokenRequest));
    }

    /**
     * @param GetCharitiesRequestType $GetCharitiesRequest
     * @return GetCharitiesResponseType
     */
    public function GetCharities(GetCharitiesRequestType $GetCharitiesRequest)
    {
      return $this->__soapCall('GetCharities', array($GetCharitiesRequest));
    }

    /**
     * @param GetClientAlertsAuthTokenRequestType $GetClientAlertsAuthTokenRequest
     * @return GetClientAlertsAuthTokenResponseType
     */
    public function GetClientAlertsAuthToken(GetClientAlertsAuthTokenRequestType $GetClientAlertsAuthTokenRequest)
    {
      return $this->__soapCall('GetClientAlertsAuthToken', array($GetClientAlertsAuthTokenRequest));
    }

    /**
     * @param GetContextualKeywordsRequestType $GetContextualKeywordsRequest
     * @return GetContextualKeywordsResponseType
     */
    public function GetContextualKeywords(GetContextualKeywordsRequestType $GetContextualKeywordsRequest)
    {
      return $this->__soapCall('GetContextualKeywords', array($GetContextualKeywordsRequest));
    }

    /**
     * @param GetCrossPromotionsRequestType $GetCrossPromotionsRequest
     * @return GetCrossPromotionsResponseType
     */
    public function GetCrossPromotions(GetCrossPromotionsRequestType $GetCrossPromotionsRequest)
    {
      return $this->__soapCall('GetCrossPromotions', array($GetCrossPromotionsRequest));
    }

    /**
     * @param GetDescriptionTemplatesRequestType $GetDescriptionTemplatesRequest
     * @return GetDescriptionTemplatesResponseType
     */
    public function GetDescriptionTemplates(GetDescriptionTemplatesRequestType $GetDescriptionTemplatesRequest)
    {
      return $this->__soapCall('GetDescriptionTemplates', array($GetDescriptionTemplatesRequest));
    }

    /**
     * @param GetDisputeRequestType $GetDisputeRequest
     * @return GetDisputeResponseType
     */
    public function GetDispute(GetDisputeRequestType $GetDisputeRequest)
    {
      return $this->__soapCall('GetDispute', array($GetDisputeRequest));
    }

    /**
     * @param GetFeedbackRequestType $GetFeedbackRequest
     * @return GetFeedbackResponseType
     */
    public function GetFeedback(GetFeedbackRequestType $GetFeedbackRequest)
    {
      return $this->__soapCall('GetFeedback', array($GetFeedbackRequest));
    }

    /**
     * @param GetHighBiddersRequestType $GetHighBiddersRequest
     * @return GetHighBiddersResponseType
     */
    public function GetHighBidders(GetHighBiddersRequestType $GetHighBiddersRequest)
    {
      return $this->__soapCall('GetHighBidders', array($GetHighBiddersRequest));
    }

    /**
     * @param GetItemRequestType $GetItemRequest
     * @return GetItemResponseType
     */
    public function GetItem(GetItemRequestType $GetItemRequest)
    {
      return $this->__soapCall('GetItem', array($GetItemRequest));
    }

    /**
     * @param GetItemRecommendationsRequestType $GetItemRecommendationsRequest
     * @return GetItemRecommendationsResponseType
     */
    public function GetItemRecommendations(GetItemRecommendationsRequestType $GetItemRecommendationsRequest)
    {
      return $this->__soapCall('GetItemRecommendations', array($GetItemRecommendationsRequest));
    }

    /**
     * @param GetItemShippingRequestType $GetItemShippingRequest
     * @return GetItemShippingResponseType
     */
    public function GetItemShipping(GetItemShippingRequestType $GetItemShippingRequest)
    {
      return $this->__soapCall('GetItemShipping', array($GetItemShippingRequest));
    }

    /**
     * @param GetItemTransactionsRequestType $GetItemTransactionsRequest
     * @return GetItemTransactionsResponseType
     */
    public function GetItemTransactions(GetItemTransactionsRequestType $GetItemTransactionsRequest)
    {
      return $this->__soapCall('GetItemTransactions', array($GetItemTransactionsRequest));
    }

    /**
     * @param GetItemsAwaitingFeedbackRequestType $GetItemsAwaitingFeedbackRequest
     * @return GetItemsAwaitingFeedbackResponseType
     */
    public function GetItemsAwaitingFeedback(GetItemsAwaitingFeedbackRequestType $GetItemsAwaitingFeedbackRequest)
    {
      return $this->__soapCall('GetItemsAwaitingFeedback', array($GetItemsAwaitingFeedbackRequest));
    }

    /**
     * @param GetMemberMessagesRequestType $GetMemberMessagesRequest
     * @return GetMemberMessagesResponseType
     */
    public function GetMemberMessages(GetMemberMessagesRequestType $GetMemberMessagesRequest)
    {
      return $this->__soapCall('GetMemberMessages', array($GetMemberMessagesRequest));
    }

    /**
     * @param GetMessagePreferencesRequestType $GetMessagePreferencesRequest
     * @return GetMessagePreferencesResponseType
     */
    public function GetMessagePreferences(GetMessagePreferencesRequestType $GetMessagePreferencesRequest)
    {
      return $this->__soapCall('GetMessagePreferences', array($GetMessagePreferencesRequest));
    }

    /**
     * @param GetMyMessagesRequestType $GetMyMessagesRequest
     * @return GetMyMessagesResponseType
     */
    public function GetMyMessages(GetMyMessagesRequestType $GetMyMessagesRequest)
    {
      return $this->__soapCall('GetMyMessages', array($GetMyMessagesRequest));
    }

    /**
     * @param GetMyeBayBuyingRequestType $GetMyeBayBuyingRequest
     * @return GetMyeBayBuyingResponseType
     */
    public function GetMyeBayBuying(GetMyeBayBuyingRequestType $GetMyeBayBuyingRequest)
    {
      return $this->__soapCall('GetMyeBayBuying', array($GetMyeBayBuyingRequest));
    }

    /**
     * @param GetMyeBayRemindersRequestType $GetMyeBayRemindersRequest
     * @return GetMyeBayRemindersResponseType
     */
    public function GetMyeBayReminders(GetMyeBayRemindersRequestType $GetMyeBayRemindersRequest)
    {
      return $this->__soapCall('GetMyeBayReminders', array($GetMyeBayRemindersRequest));
    }

    /**
     * @param GetMyeBaySellingRequestType $GetMyeBaySellingRequest
     * @return GetMyeBaySellingResponseType
     */
    public function GetMyeBaySelling(GetMyeBaySellingRequestType $GetMyeBaySellingRequest)
    {
      return $this->__soapCall('GetMyeBaySelling', array($GetMyeBaySellingRequest));
    }

    /**
     * @param GetNotificationPreferencesRequestType $GetNotificationPreferencesRequest
     * @return GetNotificationPreferencesResponseType
     */
    public function GetNotificationPreferences(GetNotificationPreferencesRequestType $GetNotificationPreferencesRequest)
    {
      return $this->__soapCall('GetNotificationPreferences', array($GetNotificationPreferencesRequest));
    }

    /**
     * @param GetNotificationsUsageRequestType $GetNotificationsUsageRequest
     * @return GetNotificationsUsageResponseType
     */
    public function GetNotificationsUsage(GetNotificationsUsageRequestType $GetNotificationsUsageRequest)
    {
      return $this->__soapCall('GetNotificationsUsage', array($GetNotificationsUsageRequest));
    }

    /**
     * @param GetOrderTransactionsRequestType $GetOrderTransactionsRequest
     * @return GetOrderTransactionsResponseType
     */
    public function GetOrderTransactions(GetOrderTransactionsRequestType $GetOrderTransactionsRequest)
    {
      return $this->__soapCall('GetOrderTransactions', array($GetOrderTransactionsRequest));
    }

    /**
     * @param GetOrdersRequestType $GetOrdersRequest
     * @return GetOrdersResponseType
     */
    public function GetOrders(GetOrdersRequestType $GetOrdersRequest)
    {
      return $this->__soapCall('GetOrders', array($GetOrdersRequest));
    }

    /**
     * @param GetPictureManagerDetailsRequestType $GetPictureManagerDetailsRequest
     * @return GetPictureManagerDetailsResponseType
     */
    public function GetPictureManagerDetails(GetPictureManagerDetailsRequestType $GetPictureManagerDetailsRequest)
    {
      return $this->__soapCall('GetPictureManagerDetails', array($GetPictureManagerDetailsRequest));
    }

    /**
     * @param GetPictureManagerOptionsRequestType $GetPictureManagerOptionsRequest
     * @return GetPictureManagerOptionsResponseType
     */
    public function GetPictureManagerOptions(GetPictureManagerOptionsRequestType $GetPictureManagerOptionsRequest)
    {
      return $this->__soapCall('GetPictureManagerOptions', array($GetPictureManagerOptionsRequest));
    }

    /**
     * @param GetProductFamilyMembersRequestType $GetProductFamilyMembersRequest
     * @return GetProductFamilyMembersResponseType
     */
    public function GetProductFamilyMembers(GetProductFamilyMembersRequestType $GetProductFamilyMembersRequest)
    {
      return $this->__soapCall('GetProductFamilyMembers', array($GetProductFamilyMembersRequest));
    }

    /**
     * @param GetProductFinderRequestType $GetProductFinderRequest
     * @return GetProductFinderResponseType
     */
    public function GetProductFinder(GetProductFinderRequestType $GetProductFinderRequest)
    {
      return $this->__soapCall('GetProductFinder', array($GetProductFinderRequest));
    }

    /**
     * @param GetProductFinderXSLRequestType $GetProductFinderXSLRequest
     * @return GetProductFinderXSLResponseType
     */
    public function GetProductFinderXSL(GetProductFinderXSLRequestType $GetProductFinderXSLRequest)
    {
      return $this->__soapCall('GetProductFinderXSL', array($GetProductFinderXSLRequest));
    }

    /**
     * @param GetProductSearchPageRequestType $GetProductSearchPageRequest
     * @return GetProductSearchPageResponseType
     */
    public function GetProductSearchPage(GetProductSearchPageRequestType $GetProductSearchPageRequest)
    {
      return $this->__soapCall('GetProductSearchPage', array($GetProductSearchPageRequest));
    }

    /**
     * @param GetProductSearchResultsRequestType $GetProductSearchResultsRequest
     * @return GetProductSearchResultsResponseType
     */
    public function GetProductSearchResults(GetProductSearchResultsRequestType $GetProductSearchResultsRequest)
    {
      return $this->__soapCall('GetProductSearchResults', array($GetProductSearchResultsRequest));
    }

    /**
     * @param GetProductSellingPagesRequestType $GetProductSellingPagesRequest
     * @return GetProductSellingPagesResponseType
     */
    public function GetProductSellingPages(GetProductSellingPagesRequestType $GetProductSellingPagesRequest)
    {
      return $this->__soapCall('GetProductSellingPages', array($GetProductSellingPagesRequest));
    }

    /**
     * @param GetPromotionRulesRequestType $GetPromotionRulesRequest
     * @return GetPromotionRulesResponseType
     */
    public function GetPromotionRules(GetPromotionRulesRequestType $GetPromotionRulesRequest)
    {
      return $this->__soapCall('GetPromotionRules', array($GetPromotionRulesRequest));
    }

    /**
     * @param GetPromotionalSaleDetailsRequestType $GetPromotionalSaleDetailsRequest
     * @return GetPromotionalSaleDetailsResponseType
     */
    public function GetPromotionalSaleDetails(GetPromotionalSaleDetailsRequestType $GetPromotionalSaleDetailsRequest)
    {
      return $this->__soapCall('GetPromotionalSaleDetails', array($GetPromotionalSaleDetailsRequest));
    }

    /**
     * @param GetSellerDashboardRequestType $GetSellerDashboardRequest
     * @return GetSellerDashboardResponseType
     */
    public function GetSellerDashboard(GetSellerDashboardRequestType $GetSellerDashboardRequest)
    {
      return $this->__soapCall('GetSellerDashboard', array($GetSellerDashboardRequest));
    }

    /**
     * @param GetSellerEventsRequestType $GetSellerEventsRequest
     * @return GetSellerEventsResponseType
     */
    public function GetSellerEvents(GetSellerEventsRequestType $GetSellerEventsRequest)
    {
      return $this->__soapCall('GetSellerEvents', array($GetSellerEventsRequest));
    }

    /**
     * @param GetSellerListRequestType $GetSellerListRequest
     * @return GetSellerListResponseType
     */
    public function GetSellerList(GetSellerListRequestType $GetSellerListRequest)
    {
      return $this->__soapCall('GetSellerList', array($GetSellerListRequest));
    }

    /**
     * @param GetSellerPaymentsRequestType $GetSellerPaymentsRequest
     * @return GetSellerPaymentsResponseType
     */
    public function GetSellerPayments(GetSellerPaymentsRequestType $GetSellerPaymentsRequest)
    {
      return $this->__soapCall('GetSellerPayments', array($GetSellerPaymentsRequest));
    }

    /**
     * @param GetSellerTransactionsRequestType $GetSellerTransactionsRequest
     * @return GetSellerTransactionsResponseType
     */
    public function GetSellerTransactions(GetSellerTransactionsRequestType $GetSellerTransactionsRequest)
    {
      return $this->__soapCall('GetSellerTransactions', array($GetSellerTransactionsRequest));
    }

    /**
     * @param GetSellingManagerAlertsRequestType $GetSellingManagerAlertsRequest
     * @return GetSellingManagerAlertsResponseType
     */
    public function GetSellingManagerAlerts(GetSellingManagerAlertsRequestType $GetSellingManagerAlertsRequest)
    {
      return $this->__soapCall('GetSellingManagerAlerts', array($GetSellingManagerAlertsRequest));
    }

    /**
     * @param GetSellingManagerEmailLogRequestType $GetSellingManagerEmailLogRequest
     * @return GetSellingManagerEmailLogResponseType
     */
    public function GetSellingManagerEmailLog(GetSellingManagerEmailLogRequestType $GetSellingManagerEmailLogRequest)
    {
      return $this->__soapCall('GetSellingManagerEmailLog', array($GetSellingManagerEmailLogRequest));
    }

    /**
     * @param GetSellingManagerInventoryRequestType $GetSellingManagerInventoryRequest
     * @return GetSellingManagerInventoryResponseType
     */
    public function GetSellingManagerInventory(GetSellingManagerInventoryRequestType $GetSellingManagerInventoryRequest)
    {
      return $this->__soapCall('GetSellingManagerInventory', array($GetSellingManagerInventoryRequest));
    }

    /**
     * @param GetSellingManagerInventoryFolderRequestType $GetSellingManagerInventoryFolderRequest
     * @return GetSellingManagerInventoryFolderResponseType
     */
    public function GetSellingManagerInventoryFolder(GetSellingManagerInventoryFolderRequestType $GetSellingManagerInventoryFolderRequest)
    {
      return $this->__soapCall('GetSellingManagerInventoryFolder', array($GetSellingManagerInventoryFolderRequest));
    }

    /**
     * @param GetSellingManagerItemAutomationRuleRequestType $GetSellingManagerItemAutomationRuleRequest
     * @return GetSellingManagerItemAutomationRuleResponseType
     */
    public function GetSellingManagerItemAutomationRule(GetSellingManagerItemAutomationRuleRequestType $GetSellingManagerItemAutomationRuleRequest)
    {
      return $this->__soapCall('GetSellingManagerItemAutomationRule', array($GetSellingManagerItemAutomationRuleRequest));
    }

    /**
     * @param GetSellingManagerSaleRecordRequestType $GetSellingManagerSaleRecordRequest
     * @return GetSellingManagerSaleRecordResponseType
     */
    public function GetSellingManagerSaleRecord(GetSellingManagerSaleRecordRequestType $GetSellingManagerSaleRecordRequest)
    {
      return $this->__soapCall('GetSellingManagerSaleRecord', array($GetSellingManagerSaleRecordRequest));
    }

    /**
     * @param GetSellingManagerSoldListingsRequestType $GetSellingManagerSoldListingsRequest
     * @return GetSellingManagerSoldListingsResponseType
     */
    public function GetSellingManagerSoldListings(GetSellingManagerSoldListingsRequestType $GetSellingManagerSoldListingsRequest)
    {
      return $this->__soapCall('GetSellingManagerSoldListings', array($GetSellingManagerSoldListingsRequest));
    }

    /**
     * @param GetSellingManagerTemplateAutomationRuleRequestType $GetSellingManagerTemplateAutomationRuleRequest
     * @return GetSellingManagerTemplateAutomationRuleResponseType
     */
    public function GetSellingManagerTemplateAutomationRule(GetSellingManagerTemplateAutomationRuleRequestType $GetSellingManagerTemplateAutomationRuleRequest)
    {
      return $this->__soapCall('GetSellingManagerTemplateAutomationRule', array($GetSellingManagerTemplateAutomationRuleRequest));
    }

    /**
     * @param GetSellingManagerTemplatesRequestType $GetSellingManagerTemplatesRequest
     * @return GetSellingManagerTemplatesResponseType
     */
    public function GetSellingManagerTemplates(GetSellingManagerTemplatesRequestType $GetSellingManagerTemplatesRequest)
    {
      return $this->__soapCall('GetSellingManagerTemplates', array($GetSellingManagerTemplatesRequest));
    }

    /**
     * @param GetSessionIDRequestType $GetSessionIDRequest
     * @return GetSessionIDResponseType
     */
    public function GetSessionID(GetSessionIDRequestType $GetSessionIDRequest)
    {
      return $this->__soapCall('GetSessionID', array($GetSessionIDRequest));
    }

    /**
     * @param GetShippingDiscountProfilesRequestType $GetShippingDiscountProfilesRequest
     * @return GetShippingDiscountProfilesResponseType
     */
    public function GetShippingDiscountProfiles(GetShippingDiscountProfilesRequestType $GetShippingDiscountProfilesRequest)
    {
      return $this->__soapCall('GetShippingDiscountProfiles', array($GetShippingDiscountProfilesRequest));
    }

    /**
     * @param GetStoreRequestType $GetStoreRequest
     * @return GetStoreResponseType
     */
    public function GetStore(GetStoreRequestType $GetStoreRequest)
    {
      return $this->__soapCall('GetStore', array($GetStoreRequest));
    }

    /**
     * @param GetStoreCategoryUpdateStatusRequestType $GetStoreCategoryUpdateStatusRequest
     * @return GetStoreCategoryUpdateStatusResponseType
     */
    public function GetStoreCategoryUpdateStatus(GetStoreCategoryUpdateStatusRequestType $GetStoreCategoryUpdateStatusRequest)
    {
      return $this->__soapCall('GetStoreCategoryUpdateStatus', array($GetStoreCategoryUpdateStatusRequest));
    }

    /**
     * @param GetStoreCustomPageRequestType $GetStoreCustomPageRequest
     * @return GetStoreCustomPageResponseType
     */
    public function GetStoreCustomPage(GetStoreCustomPageRequestType $GetStoreCustomPageRequest)
    {
      return $this->__soapCall('GetStoreCustomPage', array($GetStoreCustomPageRequest));
    }

    /**
     * @param GetStoreOptionsRequestType $GetStoreOptionsRequest
     * @return GetStoreOptionsResponseType
     */
    public function GetStoreOptions(GetStoreOptionsRequestType $GetStoreOptionsRequest)
    {
      return $this->__soapCall('GetStoreOptions', array($GetStoreOptionsRequest));
    }

    /**
     * @param GetStorePreferencesRequestType $GetStorePreferencesRequest
     * @return GetStorePreferencesResponseType
     */
    public function GetStorePreferences(GetStorePreferencesRequestType $GetStorePreferencesRequest)
    {
      return $this->__soapCall('GetStorePreferences', array($GetStorePreferencesRequest));
    }

    /**
     * @param GetSuggestedCategoriesRequestType $GetSuggestedCategoriesRequest
     * @return GetSuggestedCategoriesResponseType
     */
    public function GetSuggestedCategories(GetSuggestedCategoriesRequestType $GetSuggestedCategoriesRequest)
    {
      return $this->__soapCall('GetSuggestedCategories', array($GetSuggestedCategoriesRequest));
    }

    /**
     * @param GetTaxTableRequestType $GetTaxTableRequest
     * @return GetTaxTableResponseType
     */
    public function GetTaxTable(GetTaxTableRequestType $GetTaxTableRequest)
    {
      return $this->__soapCall('GetTaxTable', array($GetTaxTableRequest));
    }

    /**
     * @param GetTokenStatusRequestType $GetTokenStatusRequest
     * @return GetTokenStatusResponseType
     */
    public function GetTokenStatus(GetTokenStatusRequestType $GetTokenStatusRequest)
    {
      return $this->__soapCall('GetTokenStatus', array($GetTokenStatusRequest));
    }

    /**
     * @param GetUserRequestType $GetUserRequest
     * @return GetUserResponseType
     */
    public function GetUser(GetUserRequestType $GetUserRequest)
    {
      return $this->__soapCall('GetUser', array($GetUserRequest));
    }

    /**
     * @param GetUserContactDetailsRequestType $GetUserContactDetailsRequest
     * @return GetUserContactDetailsResponseType
     */
    public function GetUserContactDetails(GetUserContactDetailsRequestType $GetUserContactDetailsRequest)
    {
      return $this->__soapCall('GetUserContactDetails', array($GetUserContactDetailsRequest));
    }

    /**
     * @param GetUserDisputesRequestType $GetUserDisputesRequest
     * @return GetUserDisputesResponseType
     */
    public function GetUserDisputes(GetUserDisputesRequestType $GetUserDisputesRequest)
    {
      return $this->__soapCall('GetUserDisputes', array($GetUserDisputesRequest));
    }

    /**
     * @param GetUserPreferencesRequestType $GetUserPreferencesRequest
     * @return GetUserPreferencesResponseType
     */
    public function GetUserPreferences(GetUserPreferencesRequestType $GetUserPreferencesRequest)
    {
      return $this->__soapCall('GetUserPreferences', array($GetUserPreferencesRequest));
    }

    /**
     * @param GetVeROReasonCodeDetailsRequestType $GetVeROReasonCodeDetailsRequest
     * @return GetVeROReasonCodeDetailsResponseType
     */
    public function GetVeROReasonCodeDetails(GetVeROReasonCodeDetailsRequestType $GetVeROReasonCodeDetailsRequest)
    {
      return $this->__soapCall('GetVeROReasonCodeDetails', array($GetVeROReasonCodeDetailsRequest));
    }

    /**
     * @param GetVeROReportStatusRequestType $GetVeROReportStatusRequest
     * @return GetVeROReportStatusResponseType
     */
    public function GetVeROReportStatus(GetVeROReportStatusRequestType $GetVeROReportStatusRequest)
    {
      return $this->__soapCall('GetVeROReportStatus', array($GetVeROReportStatusRequest));
    }

    /**
     * @param GetWantItNowPostRequestType $GetWantItNowPostRequest
     * @return GetWantItNowPostResponseType
     */
    public function GetWantItNowPost(GetWantItNowPostRequestType $GetWantItNowPostRequest)
    {
      return $this->__soapCall('GetWantItNowPost', array($GetWantItNowPostRequest));
    }

    /**
     * @param GetWantItNowSearchResultsRequestType $GetWantItNowSearchResultsRequest
     * @return GetWantItNowSearchResultsResponseType
     */
    public function GetWantItNowSearchResults(GetWantItNowSearchResultsRequestType $GetWantItNowSearchResultsRequest)
    {
      return $this->__soapCall('GetWantItNowSearchResults', array($GetWantItNowSearchResultsRequest));
    }

    /**
     * @param GeteBayDetailsRequestType $GeteBayDetailsRequest
     * @return GeteBayDetailsResponseType
     */
    public function GeteBayDetails(GeteBayDetailsRequestType $GeteBayDetailsRequest)
    {
      return $this->__soapCall('GeteBayDetails', array($GeteBayDetailsRequest));
    }

    /**
     * @param GeteBayOfficialTimeRequestType $GeteBayOfficialTimeRequest
     * @return GeteBayOfficialTimeResponseType
     */
    public function GeteBayOfficialTime(GeteBayOfficialTimeRequestType $GeteBayOfficialTimeRequest)
    {
      return $this->__soapCall('GeteBayOfficialTime', array($GeteBayOfficialTimeRequest));
    }

    /**
     * @param IssueRefundRequestType $IssueRefundRequest
     * @return IssueRefundResponseType
     */
    public function IssueRefund(IssueRefundRequestType $IssueRefundRequest)
    {
      return $this->__soapCall('IssueRefund', array($IssueRefundRequest));
    }

    /**
     * @param LeaveFeedbackRequestType $LeaveFeedbackRequest
     * @return LeaveFeedbackResponseType
     */
    public function LeaveFeedback(LeaveFeedbackRequestType $LeaveFeedbackRequest)
    {
      return $this->__soapCall('LeaveFeedback', array($LeaveFeedbackRequest));
    }

    /**
     * @param MoveSellingManagerInventoryFolderRequestType $MoveSellingManagerInventoryFolderRequest
     * @return MoveSellingManagerInventoryFolderResponseType
     */
    public function MoveSellingManagerInventoryFolder(MoveSellingManagerInventoryFolderRequestType $MoveSellingManagerInventoryFolderRequest)
    {
      return $this->__soapCall('MoveSellingManagerInventoryFolder', array($MoveSellingManagerInventoryFolderRequest));
    }

    /**
     * @param PlaceOfferRequestType $PlaceOfferRequest
     * @return PlaceOfferResponseType
     */
    public function PlaceOffer(PlaceOfferRequestType $PlaceOfferRequest)
    {
      return $this->__soapCall('PlaceOffer', array($PlaceOfferRequest));
    }

    /**
     * @param RelistFixedPriceItemRequestType $RelistFixedPriceItemRequest
     * @return RelistFixedPriceItemResponseType
     */
    public function RelistFixedPriceItem(RelistFixedPriceItemRequestType $RelistFixedPriceItemRequest)
    {
      return $this->__soapCall('RelistFixedPriceItem', array($RelistFixedPriceItemRequest));
    }

    /**
     * @param RelistItemRequestType $RelistItemRequest
     * @return RelistItemResponseType
     */
    public function RelistItem(RelistItemRequestType $RelistItemRequest)
    {
      return $this->__soapCall('RelistItem', array($RelistItemRequest));
    }

    /**
     * @param RemoveFromWatchListRequestType $RemoveFromWatchListRequest
     * @return RemoveFromWatchListResponseType
     */
    public function RemoveFromWatchList(RemoveFromWatchListRequestType $RemoveFromWatchListRequest)
    {
      return $this->__soapCall('RemoveFromWatchList', array($RemoveFromWatchListRequest));
    }

    /**
     * @param RespondToBestOfferRequestType $RespondToBestOfferRequest
     * @return RespondToBestOfferResponseType
     */
    public function RespondToBestOffer(RespondToBestOfferRequestType $RespondToBestOfferRequest)
    {
      return $this->__soapCall('RespondToBestOffer', array($RespondToBestOfferRequest));
    }

    /**
     * @param RespondToFeedbackRequestType $RespondToFeedbackRequest
     * @return RespondToFeedbackResponseType
     */
    public function RespondToFeedback(RespondToFeedbackRequestType $RespondToFeedbackRequest)
    {
      return $this->__soapCall('RespondToFeedback', array($RespondToFeedbackRequest));
    }

    /**
     * @param RespondToWantItNowPostRequestType $RespondToWantItNowPostRequest
     * @return RespondToWantItNowPostResponseType
     */
    public function RespondToWantItNowPost(RespondToWantItNowPostRequestType $RespondToWantItNowPostRequest)
    {
      return $this->__soapCall('RespondToWantItNowPost', array($RespondToWantItNowPostRequest));
    }

    /**
     * @param ReviseCheckoutStatusRequestType $ReviseCheckoutStatusRequest
     * @return ReviseCheckoutStatusResponseType
     */
    public function ReviseCheckoutStatus(ReviseCheckoutStatusRequestType $ReviseCheckoutStatusRequest)
    {
      return $this->__soapCall('ReviseCheckoutStatus', array($ReviseCheckoutStatusRequest));
    }

    /**
     * @param ReviseFixedPriceItemRequestType $ReviseFixedPriceItemRequest
     * @return ReviseFixedPriceItemResponseType
     */
    public function ReviseFixedPriceItem(ReviseFixedPriceItemRequestType $ReviseFixedPriceItemRequest)
    {
      return $this->__soapCall('ReviseFixedPriceItem', array($ReviseFixedPriceItemRequest));
    }

    /**
     * @param ReviseInventoryStatusRequestType $ReviseInventoryStatusRequest
     * @return ReviseInventoryStatusResponseType
     */
    public function ReviseInventoryStatus(ReviseInventoryStatusRequestType $ReviseInventoryStatusRequest)
    {
      return $this->__soapCall('ReviseInventoryStatus', array($ReviseInventoryStatusRequest));
    }

    /**
     * @param ReviseItemRequestType $ReviseItemRequest
     * @return ReviseItemResponseType
     */
    public function ReviseItem(ReviseItemRequestType $ReviseItemRequest)
    {
      return $this->__soapCall('ReviseItem', array($ReviseItemRequest));
    }

    /**
     * @param ReviseMyMessagesRequestType $ReviseMyMessagesRequest
     * @return ReviseMyMessagesResponseType
     */
    public function ReviseMyMessages(ReviseMyMessagesRequestType $ReviseMyMessagesRequest)
    {
      return $this->__soapCall('ReviseMyMessages', array($ReviseMyMessagesRequest));
    }

    /**
     * @param ReviseMyMessagesFoldersRequestType $ReviseMyMessagesFoldersRequest
     * @return ReviseMyMessagesFoldersResponseType
     */
    public function ReviseMyMessagesFolders(ReviseMyMessagesFoldersRequestType $ReviseMyMessagesFoldersRequest)
    {
      return $this->__soapCall('ReviseMyMessagesFolders', array($ReviseMyMessagesFoldersRequest));
    }

    /**
     * @param ReviseSellingManagerInventoryFolderRequestType $ReviseSellingManagerInventoryFolderRequest
     * @return ReviseSellingManagerInventoryFolderResponseType
     */
    public function ReviseSellingManagerInventoryFolder(ReviseSellingManagerInventoryFolderRequestType $ReviseSellingManagerInventoryFolderRequest)
    {
      return $this->__soapCall('ReviseSellingManagerInventoryFolder', array($ReviseSellingManagerInventoryFolderRequest));
    }

    /**
     * @param ReviseSellingManagerProductRequestType $ReviseSellingManagerProductRequest
     * @return ReviseSellingManagerProductResponseType
     */
    public function ReviseSellingManagerProduct(ReviseSellingManagerProductRequestType $ReviseSellingManagerProductRequest)
    {
      return $this->__soapCall('ReviseSellingManagerProduct', array($ReviseSellingManagerProductRequest));
    }

    /**
     * @param ReviseSellingManagerSaleRecordRequestType $ReviseSellingManagerSaleRecordRequest
     * @return ReviseSellingManagerSaleRecordResponseType
     */
    public function ReviseSellingManagerSaleRecord(ReviseSellingManagerSaleRecordRequestType $ReviseSellingManagerSaleRecordRequest)
    {
      return $this->__soapCall('ReviseSellingManagerSaleRecord', array($ReviseSellingManagerSaleRecordRequest));
    }

    /**
     * @param ReviseSellingManagerTemplateRequestType $ReviseSellingManagerTemplateRequest
     * @return ReviseSellingManagerTemplateResponseType
     */
    public function ReviseSellingManagerTemplate(ReviseSellingManagerTemplateRequestType $ReviseSellingManagerTemplateRequest)
    {
      return $this->__soapCall('ReviseSellingManagerTemplate', array($ReviseSellingManagerTemplateRequest));
    }

    /**
     * @param RevokeTokenRequestType $RevokeTokenRequest
     * @return RevokeTokenResponseType
     */
    public function RevokeToken(RevokeTokenRequestType $RevokeTokenRequest)
    {
      return $this->__soapCall('RevokeToken', array($RevokeTokenRequest));
    }

    /**
     * @param SaveItemToSellingManagerTemplateRequestType $SaveItemToSellingManagerTemplateRequest
     * @return SaveItemToSellingManagerTemplateResponseType
     */
    public function SaveItemToSellingManagerTemplate(SaveItemToSellingManagerTemplateRequestType $SaveItemToSellingManagerTemplateRequest)
    {
      return $this->__soapCall('SaveItemToSellingManagerTemplate', array($SaveItemToSellingManagerTemplateRequest));
    }

    /**
     * @param SellerReverseDisputeRequestType $SellerReverseDisputeRequest
     * @return SellerReverseDisputeResponseType
     */
    public function SellerReverseDispute(SellerReverseDisputeRequestType $SellerReverseDisputeRequest)
    {
      return $this->__soapCall('SellerReverseDispute', array($SellerReverseDisputeRequest));
    }

    /**
     * @param SendInvoiceRequestType $SendInvoiceRequest
     * @return SendInvoiceResponseType
     */
    public function SendInvoice(SendInvoiceRequestType $SendInvoiceRequest)
    {
      return $this->__soapCall('SendInvoice', array($SendInvoiceRequest));
    }

    /**
     * @param SetMessagePreferencesRequestType $SetMessagePreferencesRequest
     * @return SetMessagePreferencesResponseType
     */
    public function SetMessagePreferences(SetMessagePreferencesRequestType $SetMessagePreferencesRequest)
    {
      return $this->__soapCall('SetMessagePreferences', array($SetMessagePreferencesRequest));
    }

    /**
     * @param SetNotificationPreferencesRequestType $SetNotificationPreferencesRequest
     * @return SetNotificationPreferencesResponseType
     */
    public function SetNotificationPreferences(SetNotificationPreferencesRequestType $SetNotificationPreferencesRequest)
    {
      return $this->__soapCall('SetNotificationPreferences', array($SetNotificationPreferencesRequest));
    }

    /**
     * @param SetPictureManagerDetailsRequestType $SetPictureManagerDetailsRequest
     * @return SetPictureManagerDetailsResponseType
     */
    public function SetPictureManagerDetails(SetPictureManagerDetailsRequestType $SetPictureManagerDetailsRequest)
    {
      return $this->__soapCall('SetPictureManagerDetails', array($SetPictureManagerDetailsRequest));
    }

    /**
     * @param SetPromotionalSaleRequestType $SetPromotionalSaleRequest
     * @return SetPromotionalSaleResponseType
     */
    public function SetPromotionalSale(SetPromotionalSaleRequestType $SetPromotionalSaleRequest)
    {
      return $this->__soapCall('SetPromotionalSale', array($SetPromotionalSaleRequest));
    }

    /**
     * @param SetPromotionalSaleListingsRequestType $SetPromotionalSaleListingsRequest
     * @return SetPromotionalSaleListingsResponseType
     */
    public function SetPromotionalSaleListings(SetPromotionalSaleListingsRequestType $SetPromotionalSaleListingsRequest)
    {
      return $this->__soapCall('SetPromotionalSaleListings', array($SetPromotionalSaleListingsRequest));
    }

    /**
     * @param SetSellingManagerFeedbackOptionsRequestType $SetSellingManagerFeedbackOptionsRequest
     * @return SetSellingManagerFeedbackOptionsResponseType
     */
    public function SetSellingManagerFeedbackOptions(SetSellingManagerFeedbackOptionsRequestType $SetSellingManagerFeedbackOptionsRequest)
    {
      return $this->__soapCall('SetSellingManagerFeedbackOptions', array($SetSellingManagerFeedbackOptionsRequest));
    }

    /**
     * @param SetSellingManagerItemAutomationRuleRequestType $SetSellingManagerItemAutomationRuleRequest
     * @return SetSellingManagerItemAutomationRuleResponseType
     */
    public function SetSellingManagerItemAutomationRule(SetSellingManagerItemAutomationRuleRequestType $SetSellingManagerItemAutomationRuleRequest)
    {
      return $this->__soapCall('SetSellingManagerItemAutomationRule', array($SetSellingManagerItemAutomationRuleRequest));
    }

    /**
     * @param SetSellingManagerTemplateAutomationRuleRequestType $SetSellingManagerTemplateAutomationRuleRequest
     * @return SetSellingManagerTemplateAutomationRuleResponseType
     */
    public function SetSellingManagerTemplateAutomationRule(SetSellingManagerTemplateAutomationRuleRequestType $SetSellingManagerTemplateAutomationRuleRequest)
    {
      return $this->__soapCall('SetSellingManagerTemplateAutomationRule', array($SetSellingManagerTemplateAutomationRuleRequest));
    }

    /**
     * @param SetShippingDiscountProfilesRequestType $SetShippingDiscountProfilesRequest
     * @return SetShippingDiscountProfilesResponseType
     */
    public function SetShippingDiscountProfiles(SetShippingDiscountProfilesRequestType $SetShippingDiscountProfilesRequest)
    {
      return $this->__soapCall('SetShippingDiscountProfiles', array($SetShippingDiscountProfilesRequest));
    }

    /**
     * @param SetStoreRequestType $SetStoreRequest
     * @return SetStoreResponseType
     */
    public function SetStore(SetStoreRequestType $SetStoreRequest)
    {
      return $this->__soapCall('SetStore', array($SetStoreRequest));
    }

    /**
     * @param SetStoreCategoriesRequestType $SetStoreCategoriesRequest
     * @return SetStoreCategoriesResponseType
     */
    public function SetStoreCategories(SetStoreCategoriesRequestType $SetStoreCategoriesRequest)
    {
      return $this->__soapCall('SetStoreCategories', array($SetStoreCategoriesRequest));
    }

    /**
     * @param SetStoreCustomPageRequestType $SetStoreCustomPageRequest
     * @return SetStoreCustomPageResponseType
     */
    public function SetStoreCustomPage(SetStoreCustomPageRequestType $SetStoreCustomPageRequest)
    {
      return $this->__soapCall('SetStoreCustomPage', array($SetStoreCustomPageRequest));
    }

    /**
     * @param SetStorePreferencesRequestType $SetStorePreferencesRequest
     * @return SetStorePreferencesResponseType
     */
    public function SetStorePreferences(SetStorePreferencesRequestType $SetStorePreferencesRequest)
    {
      return $this->__soapCall('SetStorePreferences', array($SetStorePreferencesRequest));
    }

    /**
     * @param SetTaxTableRequestType $SetTaxTableRequest
     * @return SetTaxTableResponseType
     */
    public function SetTaxTable(SetTaxTableRequestType $SetTaxTableRequest)
    {
      return $this->__soapCall('SetTaxTable', array($SetTaxTableRequest));
    }

    /**
     * @param SetUserNotesRequestType $SetUserNotesRequest
     * @return SetUserNotesResponseType
     */
    public function SetUserNotes(SetUserNotesRequestType $SetUserNotesRequest)
    {
      return $this->__soapCall('SetUserNotes', array($SetUserNotesRequest));
    }

    /**
     * @param SetUserPreferencesRequestType $SetUserPreferencesRequest
     * @return SetUserPreferencesResponseType
     */
    public function SetUserPreferences(SetUserPreferencesRequestType $SetUserPreferencesRequest)
    {
      return $this->__soapCall('SetUserPreferences', array($SetUserPreferencesRequest));
    }

    /**
     * @param UploadSiteHostedPicturesRequestType $UploadSiteHostedPicturesRequest
     * @return UploadSiteHostedPicturesResponseType
     */
    public function UploadSiteHostedPictures(UploadSiteHostedPicturesRequestType $UploadSiteHostedPicturesRequest)
    {
      return $this->__soapCall('UploadSiteHostedPictures', array($UploadSiteHostedPicturesRequest));
    }

    /**
     * @param ValidateChallengeInputRequestType $ValidateChallengeInputRequest
     * @return ValidateChallengeInputResponseType
     */
    public function ValidateChallengeInput(ValidateChallengeInputRequestType $ValidateChallengeInputRequest)
    {
      return $this->__soapCall('ValidateChallengeInput', array($ValidateChallengeInputRequest));
    }

    /**
     * @param ValidateTestUserRegistrationRequestType $ValidateTestUserRegistrationRequest
     * @return ValidateTestUserRegistrationResponseType
     */
    public function ValidateTestUserRegistration(ValidateTestUserRegistrationRequestType $ValidateTestUserRegistrationRequest)
    {
      return $this->__soapCall('ValidateTestUserRegistration', array($ValidateTestUserRegistrationRequest));
    }

    /**
     * @param VeROReportItemsRequestType $VeROReportItemsRequest
     * @return VeROReportItemsResponseType
     */
    public function VeROReportItems(VeROReportItemsRequestType $VeROReportItemsRequest)
    {
      return $this->__soapCall('VeROReportItems', array($VeROReportItemsRequest));
    }

    /**
     * @param VerifyAddFixedPriceItemRequestType $VerifyAddFixedPriceItemRequest
     * @return VerifyAddFixedPriceItemResponseType
     */
    public function VerifyAddFixedPriceItem(VerifyAddFixedPriceItemRequestType $VerifyAddFixedPriceItemRequest)
    {
      return $this->__soapCall('VerifyAddFixedPriceItem', array($VerifyAddFixedPriceItemRequest));
    }

    /**
     * @param VerifyAddItemRequestType $VerifyAddItemRequest
     * @return VerifyAddItemResponseType
     */
    public function VerifyAddItem(VerifyAddItemRequestType $VerifyAddItemRequest)
    {
      return $this->__soapCall('VerifyAddItem', array($VerifyAddItemRequest));
    }

    /**
     * @param VerifyAddSecondChanceItemRequestType $VerifyAddSecondChanceItemRequest
     * @return VerifyAddSecondChanceItemResponseType
     */
    public function VerifyAddSecondChanceItem(VerifyAddSecondChanceItemRequestType $VerifyAddSecondChanceItemRequest)
    {
      return $this->__soapCall('VerifyAddSecondChanceItem', array($VerifyAddSecondChanceItemRequest));
    }

    /**
     * @param VerifyRelistItemRequestType $VerifyRelistItemRequest
     * @return VerifyRelistItemResponseType
     */
    public function VerifyRelistItem(VerifyRelistItemRequestType $VerifyRelistItemRequest)
    {
      return $this->__soapCall('VerifyRelistItem', array($VerifyRelistItemRequest));
    }

}
