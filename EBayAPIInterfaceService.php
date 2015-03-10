<?php

namespace EbayWsdl;


/**
 * 849
 */
class EBayAPIInterfaceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AddDisputeRequestType' => 'EbayWsdl\\AddDisputeRequestType',
      'AddDisputeResponseType' => 'EbayWsdl\\AddDisputeResponseType',
      'AddDisputeResponseRequestType' => 'EbayWsdl\\AddDisputeResponseRequestType',
      'AddDisputeResponseResponseType' => 'EbayWsdl\\AddDisputeResponseResponseType',
      'AddFixedPriceItemRequestType' => 'EbayWsdl\\AddFixedPriceItemRequestType',
      'AddFixedPriceItemResponseType' => 'EbayWsdl\\AddFixedPriceItemResponseType',
      'AddItemRequestType' => 'EbayWsdl\\AddItemRequestType',
      'AddItemResponseType' => 'EbayWsdl\\AddItemResponseType',
      'AddItemFromSellingManagerTemplateRequestType' => 'EbayWsdl\\AddItemFromSellingManagerTemplateRequestType',
      'AddItemFromSellingManagerTemplateResponseType' => 'EbayWsdl\\AddItemFromSellingManagerTemplateResponseType',
      'AddItemsRequestType' => 'EbayWsdl\\AddItemsRequestType',
      'AddItemsResponseType' => 'EbayWsdl\\AddItemsResponseType',
      'AddMemberMessageAAQToPartnerRequestType' => 'EbayWsdl\\AddMemberMessageAAQToPartnerRequestType',
      'AddMemberMessageAAQToPartnerResponseType' => 'EbayWsdl\\AddMemberMessageAAQToPartnerResponseType',
      'AddMemberMessageRTQRequestType' => 'EbayWsdl\\AddMemberMessageRTQRequestType',
      'AddMemberMessageRTQResponseType' => 'EbayWsdl\\AddMemberMessageRTQResponseType',
      'AddMemberMessagesAAQToBidderRequestType' => 'EbayWsdl\\AddMemberMessagesAAQToBidderRequestType',
      'AddMemberMessagesAAQToBidderResponseType' => 'EbayWsdl\\AddMemberMessagesAAQToBidderResponseType',
      'AddOrderRequestType' => 'EbayWsdl\\AddOrderRequestType',
      'AddOrderResponseType' => 'EbayWsdl\\AddOrderResponseType',
      'AddSecondChanceItemRequestType' => 'EbayWsdl\\AddSecondChanceItemRequestType',
      'AddSecondChanceItemResponseType' => 'EbayWsdl\\AddSecondChanceItemResponseType',
      'AddSellingManagerInventoryFolderRequestType' => 'EbayWsdl\\AddSellingManagerInventoryFolderRequestType',
      'AddSellingManagerInventoryFolderResponseType' => 'EbayWsdl\\AddSellingManagerInventoryFolderResponseType',
      'AddSellingManagerProductRequestType' => 'EbayWsdl\\AddSellingManagerProductRequestType',
      'AddSellingManagerProductResponseType' => 'EbayWsdl\\AddSellingManagerProductResponseType',
      'AddSellingManagerTemplateRequestType' => 'EbayWsdl\\AddSellingManagerTemplateRequestType',
      'AddSellingManagerTemplateResponseType' => 'EbayWsdl\\AddSellingManagerTemplateResponseType',
      'AddToItemDescriptionRequestType' => 'EbayWsdl\\AddToItemDescriptionRequestType',
      'AddToItemDescriptionResponseType' => 'EbayWsdl\\AddToItemDescriptionResponseType',
      'AddToWatchListRequestType' => 'EbayWsdl\\AddToWatchListRequestType',
      'AddToWatchListResponseType' => 'EbayWsdl\\AddToWatchListResponseType',
      'AddTransactionConfirmationItemRequestType' => 'EbayWsdl\\AddTransactionConfirmationItemRequestType',
      'AddTransactionConfirmationItemResponseType' => 'EbayWsdl\\AddTransactionConfirmationItemResponseType',
      'CompleteSaleRequestType' => 'EbayWsdl\\CompleteSaleRequestType',
      'CompleteSaleResponseType' => 'EbayWsdl\\CompleteSaleResponseType',
      'ConfirmIdentityRequestType' => 'EbayWsdl\\ConfirmIdentityRequestType',
      'ConfirmIdentityResponseType' => 'EbayWsdl\\ConfirmIdentityResponseType',
      'DeleteMyMessagesRequestType' => 'EbayWsdl\\DeleteMyMessagesRequestType',
      'DeleteMyMessagesResponseType' => 'EbayWsdl\\DeleteMyMessagesResponseType',
      'DeleteSellingManagerInventoryFolderRequestType' => 'EbayWsdl\\DeleteSellingManagerInventoryFolderRequestType',
      'DeleteSellingManagerInventoryFolderResponseType' => 'EbayWsdl\\DeleteSellingManagerInventoryFolderResponseType',
      'DeleteSellingManagerItemAutomationRuleRequestType' => 'EbayWsdl\\DeleteSellingManagerItemAutomationRuleRequestType',
      'DeleteSellingManagerItemAutomationRuleResponseType' => 'EbayWsdl\\DeleteSellingManagerItemAutomationRuleResponseType',
      'DeleteSellingManagerProductRequestType' => 'EbayWsdl\\DeleteSellingManagerProductRequestType',
      'DeleteSellingManagerProductResponseType' => 'EbayWsdl\\DeleteSellingManagerProductResponseType',
      'DeleteSellingManagerTemplateRequestType' => 'EbayWsdl\\DeleteSellingManagerTemplateRequestType',
      'DeleteSellingManagerTemplateResponseType' => 'EbayWsdl\\DeleteSellingManagerTemplateResponseType',
      'DeleteSellingManagerTemplateAutomationRuleRequestType' => 'EbayWsdl\\DeleteSellingManagerTemplateAutomationRuleRequestType',
      'DeleteSellingManagerTemplateAutomationRuleResponseType' => 'EbayWsdl\\DeleteSellingManagerTemplateAutomationRuleResponseType',
      'DisableUnpaidItemAssistanceRequestType' => 'EbayWsdl\\DisableUnpaidItemAssistanceRequestType',
      'DisableUnpaidItemAssistanceResponseType' => 'EbayWsdl\\DisableUnpaidItemAssistanceResponseType',
      'EndFixedPriceItemRequestType' => 'EbayWsdl\\EndFixedPriceItemRequestType',
      'EndFixedPriceItemResponseType' => 'EbayWsdl\\EndFixedPriceItemResponseType',
      'EndItemRequestType' => 'EbayWsdl\\EndItemRequestType',
      'EndItemResponseType' => 'EbayWsdl\\EndItemResponseType',
      'EndItemsRequestType' => 'EbayWsdl\\EndItemsRequestType',
      'EndItemsResponseType' => 'EbayWsdl\\EndItemsResponseType',
      'ExtendSiteHostedPicturesRequestType' => 'EbayWsdl\\ExtendSiteHostedPicturesRequestType',
      'ExtendSiteHostedPicturesResponseType' => 'EbayWsdl\\ExtendSiteHostedPicturesResponseType',
      'FetchTokenRequestType' => 'EbayWsdl\\FetchTokenRequestType',
      'FetchTokenResponseType' => 'EbayWsdl\\FetchTokenResponseType',
      'GetAccountRequestType' => 'EbayWsdl\\GetAccountRequestType',
      'GetAccountResponseType' => 'EbayWsdl\\GetAccountResponseType',
      'GetAdFormatLeadsRequestType' => 'EbayWsdl\\GetAdFormatLeadsRequestType',
      'GetAdFormatLeadsResponseType' => 'EbayWsdl\\GetAdFormatLeadsResponseType',
      'GetAllBiddersRequestType' => 'EbayWsdl\\GetAllBiddersRequestType',
      'GetAllBiddersResponseType' => 'EbayWsdl\\GetAllBiddersResponseType',
      'GetApiAccessRulesRequestType' => 'EbayWsdl\\GetApiAccessRulesRequestType',
      'GetApiAccessRulesResponseType' => 'EbayWsdl\\GetApiAccessRulesResponseType',
      'GetAttributesCSRequestType' => 'EbayWsdl\\GetAttributesCSRequestType',
      'GetAttributesCSResponseType' => 'EbayWsdl\\GetAttributesCSResponseType',
      'GetAttributesXSLRequestType' => 'EbayWsdl\\GetAttributesXSLRequestType',
      'GetAttributesXSLResponseType' => 'EbayWsdl\\GetAttributesXSLResponseType',
      'GetBestOffersRequestType' => 'EbayWsdl\\GetBestOffersRequestType',
      'GetBestOffersResponseType' => 'EbayWsdl\\GetBestOffersResponseType',
      'GetBidderListRequestType' => 'EbayWsdl\\GetBidderListRequestType',
      'GetBidderListResponseType' => 'EbayWsdl\\GetBidderListResponseType',
      'GetCategoriesRequestType' => 'EbayWsdl\\GetCategoriesRequestType',
      'GetCategoriesResponseType' => 'EbayWsdl\\GetCategoriesResponseType',
      'GetCategory2CSRequestType' => 'EbayWsdl\\GetCategory2CSRequestType',
      'GetCategory2CSResponseType' => 'EbayWsdl\\GetCategory2CSResponseType',
      'GetCategoryFeaturesRequestType' => 'EbayWsdl\\GetCategoryFeaturesRequestType',
      'GetCategoryFeaturesResponseType' => 'EbayWsdl\\GetCategoryFeaturesResponseType',
      'GetCategoryMappingsRequestType' => 'EbayWsdl\\GetCategoryMappingsRequestType',
      'GetCategoryMappingsResponseType' => 'EbayWsdl\\GetCategoryMappingsResponseType',
      'GetCategorySpecificsRequestType' => 'EbayWsdl\\GetCategorySpecificsRequestType',
      'GetCategorySpecificsResponseType' => 'EbayWsdl\\GetCategorySpecificsResponseType',
      'GetChallengeTokenRequestType' => 'EbayWsdl\\GetChallengeTokenRequestType',
      'GetChallengeTokenResponseType' => 'EbayWsdl\\GetChallengeTokenResponseType',
      'GetCharitiesRequestType' => 'EbayWsdl\\GetCharitiesRequestType',
      'GetCharitiesResponseType' => 'EbayWsdl\\GetCharitiesResponseType',
      'GetClientAlertsAuthTokenRequestType' => 'EbayWsdl\\GetClientAlertsAuthTokenRequestType',
      'GetClientAlertsAuthTokenResponseType' => 'EbayWsdl\\GetClientAlertsAuthTokenResponseType',
      'GetContextualKeywordsRequestType' => 'EbayWsdl\\GetContextualKeywordsRequestType',
      'GetContextualKeywordsResponseType' => 'EbayWsdl\\GetContextualKeywordsResponseType',
      'GetCrossPromotionsRequestType' => 'EbayWsdl\\GetCrossPromotionsRequestType',
      'GetCrossPromotionsResponseType' => 'EbayWsdl\\GetCrossPromotionsResponseType',
      'GetDescriptionTemplatesRequestType' => 'EbayWsdl\\GetDescriptionTemplatesRequestType',
      'GetDescriptionTemplatesResponseType' => 'EbayWsdl\\GetDescriptionTemplatesResponseType',
      'GetDisputeRequestType' => 'EbayWsdl\\GetDisputeRequestType',
      'GetDisputeResponseType' => 'EbayWsdl\\GetDisputeResponseType',
      'GetFeedbackRequestType' => 'EbayWsdl\\GetFeedbackRequestType',
      'GetFeedbackResponseType' => 'EbayWsdl\\GetFeedbackResponseType',
      'GetHighBiddersRequestType' => 'EbayWsdl\\GetHighBiddersRequestType',
      'GetHighBiddersResponseType' => 'EbayWsdl\\GetHighBiddersResponseType',
      'GetItemRequestType' => 'EbayWsdl\\GetItemRequestType',
      'GetItemResponseType' => 'EbayWsdl\\GetItemResponseType',
      'GetItemRecommendationsRequestType' => 'EbayWsdl\\GetItemRecommendationsRequestType',
      'GetItemRecommendationsResponseType' => 'EbayWsdl\\GetItemRecommendationsResponseType',
      'GetItemShippingRequestType' => 'EbayWsdl\\GetItemShippingRequestType',
      'GetItemShippingResponseType' => 'EbayWsdl\\GetItemShippingResponseType',
      'GetItemTransactionsRequestType' => 'EbayWsdl\\GetItemTransactionsRequestType',
      'GetItemTransactionsResponseType' => 'EbayWsdl\\GetItemTransactionsResponseType',
      'GetItemsAwaitingFeedbackRequestType' => 'EbayWsdl\\GetItemsAwaitingFeedbackRequestType',
      'GetItemsAwaitingFeedbackResponseType' => 'EbayWsdl\\GetItemsAwaitingFeedbackResponseType',
      'GetMemberMessagesRequestType' => 'EbayWsdl\\GetMemberMessagesRequestType',
      'GetMemberMessagesResponseType' => 'EbayWsdl\\GetMemberMessagesResponseType',
      'GetMessagePreferencesRequestType' => 'EbayWsdl\\GetMessagePreferencesRequestType',
      'GetMessagePreferencesResponseType' => 'EbayWsdl\\GetMessagePreferencesResponseType',
      'GetMyMessagesRequestType' => 'EbayWsdl\\GetMyMessagesRequestType',
      'GetMyMessagesResponseType' => 'EbayWsdl\\GetMyMessagesResponseType',
      'GetMyeBayBuyingRequestType' => 'EbayWsdl\\GetMyeBayBuyingRequestType',
      'GetMyeBayBuyingResponseType' => 'EbayWsdl\\GetMyeBayBuyingResponseType',
      'GetMyeBayRemindersRequestType' => 'EbayWsdl\\GetMyeBayRemindersRequestType',
      'GetMyeBayRemindersResponseType' => 'EbayWsdl\\GetMyeBayRemindersResponseType',
      'GetMyeBaySellingRequestType' => 'EbayWsdl\\GetMyeBaySellingRequestType',
      'GetMyeBaySellingResponseType' => 'EbayWsdl\\GetMyeBaySellingResponseType',
      'GetNotificationPreferencesRequestType' => 'EbayWsdl\\GetNotificationPreferencesRequestType',
      'GetNotificationPreferencesResponseType' => 'EbayWsdl\\GetNotificationPreferencesResponseType',
      'GetNotificationsUsageRequestType' => 'EbayWsdl\\GetNotificationsUsageRequestType',
      'GetNotificationsUsageResponseType' => 'EbayWsdl\\GetNotificationsUsageResponseType',
      'GetOrderTransactionsRequestType' => 'EbayWsdl\\GetOrderTransactionsRequestType',
      'GetOrderTransactionsResponseType' => 'EbayWsdl\\GetOrderTransactionsResponseType',
      'GetOrdersRequestType' => 'EbayWsdl\\GetOrdersRequestType',
      'GetOrdersResponseType' => 'EbayWsdl\\GetOrdersResponseType',
      'GetPictureManagerDetailsRequestType' => 'EbayWsdl\\GetPictureManagerDetailsRequestType',
      'GetPictureManagerDetailsResponseType' => 'EbayWsdl\\GetPictureManagerDetailsResponseType',
      'GetPictureManagerOptionsRequestType' => 'EbayWsdl\\GetPictureManagerOptionsRequestType',
      'GetPictureManagerOptionsResponseType' => 'EbayWsdl\\GetPictureManagerOptionsResponseType',
      'GetProductFamilyMembersRequestType' => 'EbayWsdl\\GetProductFamilyMembersRequestType',
      'GetProductFamilyMembersResponseType' => 'EbayWsdl\\GetProductFamilyMembersResponseType',
      'GetProductFinderRequestType' => 'EbayWsdl\\GetProductFinderRequestType',
      'GetProductFinderResponseType' => 'EbayWsdl\\GetProductFinderResponseType',
      'GetProductFinderXSLRequestType' => 'EbayWsdl\\GetProductFinderXSLRequestType',
      'GetProductFinderXSLResponseType' => 'EbayWsdl\\GetProductFinderXSLResponseType',
      'GetProductSearchPageRequestType' => 'EbayWsdl\\GetProductSearchPageRequestType',
      'GetProductSearchPageResponseType' => 'EbayWsdl\\GetProductSearchPageResponseType',
      'GetProductSearchResultsRequestType' => 'EbayWsdl\\GetProductSearchResultsRequestType',
      'GetProductSearchResultsResponseType' => 'EbayWsdl\\GetProductSearchResultsResponseType',
      'GetProductSellingPagesRequestType' => 'EbayWsdl\\GetProductSellingPagesRequestType',
      'GetProductSellingPagesResponseType' => 'EbayWsdl\\GetProductSellingPagesResponseType',
      'GetPromotionRulesRequestType' => 'EbayWsdl\\GetPromotionRulesRequestType',
      'GetPromotionRulesResponseType' => 'EbayWsdl\\GetPromotionRulesResponseType',
      'GetPromotionalSaleDetailsRequestType' => 'EbayWsdl\\GetPromotionalSaleDetailsRequestType',
      'GetPromotionalSaleDetailsResponseType' => 'EbayWsdl\\GetPromotionalSaleDetailsResponseType',
      'GetSellerDashboardRequestType' => 'EbayWsdl\\GetSellerDashboardRequestType',
      'GetSellerDashboardResponseType' => 'EbayWsdl\\GetSellerDashboardResponseType',
      'GetSellerEventsRequestType' => 'EbayWsdl\\GetSellerEventsRequestType',
      'GetSellerEventsResponseType' => 'EbayWsdl\\GetSellerEventsResponseType',
      'GetSellerListRequestType' => 'EbayWsdl\\GetSellerListRequestType',
      'GetSellerListResponseType' => 'EbayWsdl\\GetSellerListResponseType',
      'GetSellerPaymentsRequestType' => 'EbayWsdl\\GetSellerPaymentsRequestType',
      'GetSellerPaymentsResponseType' => 'EbayWsdl\\GetSellerPaymentsResponseType',
      'GetSellerTransactionsRequestType' => 'EbayWsdl\\GetSellerTransactionsRequestType',
      'GetSellerTransactionsResponseType' => 'EbayWsdl\\GetSellerTransactionsResponseType',
      'GetSellingManagerAlertsRequestType' => 'EbayWsdl\\GetSellingManagerAlertsRequestType',
      'GetSellingManagerAlertsResponseType' => 'EbayWsdl\\GetSellingManagerAlertsResponseType',
      'GetSellingManagerEmailLogRequestType' => 'EbayWsdl\\GetSellingManagerEmailLogRequestType',
      'GetSellingManagerEmailLogResponseType' => 'EbayWsdl\\GetSellingManagerEmailLogResponseType',
      'GetSellingManagerInventoryRequestType' => 'EbayWsdl\\GetSellingManagerInventoryRequestType',
      'GetSellingManagerInventoryResponseType' => 'EbayWsdl\\GetSellingManagerInventoryResponseType',
      'GetSellingManagerInventoryFolderRequestType' => 'EbayWsdl\\GetSellingManagerInventoryFolderRequestType',
      'GetSellingManagerInventoryFolderResponseType' => 'EbayWsdl\\GetSellingManagerInventoryFolderResponseType',
      'GetSellingManagerItemAutomationRuleRequestType' => 'EbayWsdl\\GetSellingManagerItemAutomationRuleRequestType',
      'GetSellingManagerItemAutomationRuleResponseType' => 'EbayWsdl\\GetSellingManagerItemAutomationRuleResponseType',
      'GetSellingManagerSaleRecordRequestType' => 'EbayWsdl\\GetSellingManagerSaleRecordRequestType',
      'GetSellingManagerSaleRecordResponseType' => 'EbayWsdl\\GetSellingManagerSaleRecordResponseType',
      'GetSellingManagerSoldListingsRequestType' => 'EbayWsdl\\GetSellingManagerSoldListingsRequestType',
      'GetSellingManagerSoldListingsResponseType' => 'EbayWsdl\\GetSellingManagerSoldListingsResponseType',
      'GetSellingManagerTemplateAutomationRuleRequestType' => 'EbayWsdl\\GetSellingManagerTemplateAutomationRuleRequestType',
      'GetSellingManagerTemplateAutomationRuleResponseType' => 'EbayWsdl\\GetSellingManagerTemplateAutomationRuleResponseType',
      'GetSellingManagerTemplatesRequestType' => 'EbayWsdl\\GetSellingManagerTemplatesRequestType',
      'GetSellingManagerTemplatesResponseType' => 'EbayWsdl\\GetSellingManagerTemplatesResponseType',
      'GetSessionIDRequestType' => 'EbayWsdl\\GetSessionIDRequestType',
      'GetSessionIDResponseType' => 'EbayWsdl\\GetSessionIDResponseType',
      'GetShippingDiscountProfilesRequestType' => 'EbayWsdl\\GetShippingDiscountProfilesRequestType',
      'GetShippingDiscountProfilesResponseType' => 'EbayWsdl\\GetShippingDiscountProfilesResponseType',
      'GetStoreRequestType' => 'EbayWsdl\\GetStoreRequestType',
      'GetStoreResponseType' => 'EbayWsdl\\GetStoreResponseType',
      'GetStoreCategoryUpdateStatusRequestType' => 'EbayWsdl\\GetStoreCategoryUpdateStatusRequestType',
      'GetStoreCategoryUpdateStatusResponseType' => 'EbayWsdl\\GetStoreCategoryUpdateStatusResponseType',
      'GetStoreCustomPageRequestType' => 'EbayWsdl\\GetStoreCustomPageRequestType',
      'GetStoreCustomPageResponseType' => 'EbayWsdl\\GetStoreCustomPageResponseType',
      'GetStoreOptionsRequestType' => 'EbayWsdl\\GetStoreOptionsRequestType',
      'GetStoreOptionsResponseType' => 'EbayWsdl\\GetStoreOptionsResponseType',
      'GetStorePreferencesRequestType' => 'EbayWsdl\\GetStorePreferencesRequestType',
      'GetStorePreferencesResponseType' => 'EbayWsdl\\GetStorePreferencesResponseType',
      'GetSuggestedCategoriesRequestType' => 'EbayWsdl\\GetSuggestedCategoriesRequestType',
      'GetSuggestedCategoriesResponseType' => 'EbayWsdl\\GetSuggestedCategoriesResponseType',
      'GetTaxTableRequestType' => 'EbayWsdl\\GetTaxTableRequestType',
      'GetTaxTableResponseType' => 'EbayWsdl\\GetTaxTableResponseType',
      'GetTokenStatusRequestType' => 'EbayWsdl\\GetTokenStatusRequestType',
      'GetTokenStatusResponseType' => 'EbayWsdl\\GetTokenStatusResponseType',
      'GetUserRequestType' => 'EbayWsdl\\GetUserRequestType',
      'GetUserResponseType' => 'EbayWsdl\\GetUserResponseType',
      'GetUserContactDetailsRequestType' => 'EbayWsdl\\GetUserContactDetailsRequestType',
      'GetUserContactDetailsResponseType' => 'EbayWsdl\\GetUserContactDetailsResponseType',
      'GetUserDisputesRequestType' => 'EbayWsdl\\GetUserDisputesRequestType',
      'GetUserDisputesResponseType' => 'EbayWsdl\\GetUserDisputesResponseType',
      'GetUserPreferencesRequestType' => 'EbayWsdl\\GetUserPreferencesRequestType',
      'GetUserPreferencesResponseType' => 'EbayWsdl\\GetUserPreferencesResponseType',
      'GetVeROReasonCodeDetailsRequestType' => 'EbayWsdl\\GetVeROReasonCodeDetailsRequestType',
      'GetVeROReasonCodeDetailsResponseType' => 'EbayWsdl\\GetVeROReasonCodeDetailsResponseType',
      'GetVeROReportStatusRequestType' => 'EbayWsdl\\GetVeROReportStatusRequestType',
      'GetVeROReportStatusResponseType' => 'EbayWsdl\\GetVeROReportStatusResponseType',
      'GetWantItNowPostRequestType' => 'EbayWsdl\\GetWantItNowPostRequestType',
      'GetWantItNowPostResponseType' => 'EbayWsdl\\GetWantItNowPostResponseType',
      'GetWantItNowSearchResultsRequestType' => 'EbayWsdl\\GetWantItNowSearchResultsRequestType',
      'GetWantItNowSearchResultsResponseType' => 'EbayWsdl\\GetWantItNowSearchResultsResponseType',
      'GeteBayDetailsRequestType' => 'EbayWsdl\\GeteBayDetailsRequestType',
      'GeteBayDetailsResponseType' => 'EbayWsdl\\GeteBayDetailsResponseType',
      'GeteBayOfficialTimeRequestType' => 'EbayWsdl\\GeteBayOfficialTimeRequestType',
      'GeteBayOfficialTimeResponseType' => 'EbayWsdl\\GeteBayOfficialTimeResponseType',
      'IssueRefundRequestType' => 'EbayWsdl\\IssueRefundRequestType',
      'IssueRefundResponseType' => 'EbayWsdl\\IssueRefundResponseType',
      'LeaveFeedbackRequestType' => 'EbayWsdl\\LeaveFeedbackRequestType',
      'LeaveFeedbackResponseType' => 'EbayWsdl\\LeaveFeedbackResponseType',
      'MoveSellingManagerInventoryFolderRequestType' => 'EbayWsdl\\MoveSellingManagerInventoryFolderRequestType',
      'MoveSellingManagerInventoryFolderResponseType' => 'EbayWsdl\\MoveSellingManagerInventoryFolderResponseType',
      'PlaceOfferRequestType' => 'EbayWsdl\\PlaceOfferRequestType',
      'PlaceOfferResponseType' => 'EbayWsdl\\PlaceOfferResponseType',
      'RelistFixedPriceItemRequestType' => 'EbayWsdl\\RelistFixedPriceItemRequestType',
      'RelistFixedPriceItemResponseType' => 'EbayWsdl\\RelistFixedPriceItemResponseType',
      'RelistItemRequestType' => 'EbayWsdl\\RelistItemRequestType',
      'RelistItemResponseType' => 'EbayWsdl\\RelistItemResponseType',
      'RemoveFromWatchListRequestType' => 'EbayWsdl\\RemoveFromWatchListRequestType',
      'RemoveFromWatchListResponseType' => 'EbayWsdl\\RemoveFromWatchListResponseType',
      'RespondToBestOfferRequestType' => 'EbayWsdl\\RespondToBestOfferRequestType',
      'RespondToBestOfferResponseType' => 'EbayWsdl\\RespondToBestOfferResponseType',
      'RespondToFeedbackRequestType' => 'EbayWsdl\\RespondToFeedbackRequestType',
      'RespondToFeedbackResponseType' => 'EbayWsdl\\RespondToFeedbackResponseType',
      'RespondToWantItNowPostRequestType' => 'EbayWsdl\\RespondToWantItNowPostRequestType',
      'RespondToWantItNowPostResponseType' => 'EbayWsdl\\RespondToWantItNowPostResponseType',
      'ReviseCheckoutStatusRequestType' => 'EbayWsdl\\ReviseCheckoutStatusRequestType',
      'ReviseCheckoutStatusResponseType' => 'EbayWsdl\\ReviseCheckoutStatusResponseType',
      'ReviseFixedPriceItemRequestType' => 'EbayWsdl\\ReviseFixedPriceItemRequestType',
      'ReviseFixedPriceItemResponseType' => 'EbayWsdl\\ReviseFixedPriceItemResponseType',
      'ReviseInventoryStatusRequestType' => 'EbayWsdl\\ReviseInventoryStatusRequestType',
      'ReviseInventoryStatusResponseType' => 'EbayWsdl\\ReviseInventoryStatusResponseType',
      'ReviseItemRequestType' => 'EbayWsdl\\ReviseItemRequestType',
      'ReviseItemResponseType' => 'EbayWsdl\\ReviseItemResponseType',
      'ReviseMyMessagesRequestType' => 'EbayWsdl\\ReviseMyMessagesRequestType',
      'ReviseMyMessagesResponseType' => 'EbayWsdl\\ReviseMyMessagesResponseType',
      'ReviseMyMessagesFoldersRequestType' => 'EbayWsdl\\ReviseMyMessagesFoldersRequestType',
      'ReviseMyMessagesFoldersResponseType' => 'EbayWsdl\\ReviseMyMessagesFoldersResponseType',
      'ReviseSellingManagerInventoryFolderRequestType' => 'EbayWsdl\\ReviseSellingManagerInventoryFolderRequestType',
      'ReviseSellingManagerInventoryFolderResponseType' => 'EbayWsdl\\ReviseSellingManagerInventoryFolderResponseType',
      'ReviseSellingManagerProductRequestType' => 'EbayWsdl\\ReviseSellingManagerProductRequestType',
      'ReviseSellingManagerProductResponseType' => 'EbayWsdl\\ReviseSellingManagerProductResponseType',
      'ReviseSellingManagerSaleRecordRequestType' => 'EbayWsdl\\ReviseSellingManagerSaleRecordRequestType',
      'ReviseSellingManagerSaleRecordResponseType' => 'EbayWsdl\\ReviseSellingManagerSaleRecordResponseType',
      'ReviseSellingManagerTemplateRequestType' => 'EbayWsdl\\ReviseSellingManagerTemplateRequestType',
      'ReviseSellingManagerTemplateResponseType' => 'EbayWsdl\\ReviseSellingManagerTemplateResponseType',
      'RevokeTokenRequestType' => 'EbayWsdl\\RevokeTokenRequestType',
      'RevokeTokenResponseType' => 'EbayWsdl\\RevokeTokenResponseType',
      'SaveItemToSellingManagerTemplateRequestType' => 'EbayWsdl\\SaveItemToSellingManagerTemplateRequestType',
      'SaveItemToSellingManagerTemplateResponseType' => 'EbayWsdl\\SaveItemToSellingManagerTemplateResponseType',
      'SellerReverseDisputeRequestType' => 'EbayWsdl\\SellerReverseDisputeRequestType',
      'SellerReverseDisputeResponseType' => 'EbayWsdl\\SellerReverseDisputeResponseType',
      'SendInvoiceRequestType' => 'EbayWsdl\\SendInvoiceRequestType',
      'SendInvoiceResponseType' => 'EbayWsdl\\SendInvoiceResponseType',
      'SetMessagePreferencesRequestType' => 'EbayWsdl\\SetMessagePreferencesRequestType',
      'SetMessagePreferencesResponseType' => 'EbayWsdl\\SetMessagePreferencesResponseType',
      'SetNotificationPreferencesRequestType' => 'EbayWsdl\\SetNotificationPreferencesRequestType',
      'SetNotificationPreferencesResponseType' => 'EbayWsdl\\SetNotificationPreferencesResponseType',
      'SetPictureManagerDetailsRequestType' => 'EbayWsdl\\SetPictureManagerDetailsRequestType',
      'SetPictureManagerDetailsResponseType' => 'EbayWsdl\\SetPictureManagerDetailsResponseType',
      'SetPromotionalSaleRequestType' => 'EbayWsdl\\SetPromotionalSaleRequestType',
      'SetPromotionalSaleResponseType' => 'EbayWsdl\\SetPromotionalSaleResponseType',
      'SetPromotionalSaleListingsRequestType' => 'EbayWsdl\\SetPromotionalSaleListingsRequestType',
      'SetPromotionalSaleListingsResponseType' => 'EbayWsdl\\SetPromotionalSaleListingsResponseType',
      'SetSellingManagerFeedbackOptionsRequestType' => 'EbayWsdl\\SetSellingManagerFeedbackOptionsRequestType',
      'SetSellingManagerFeedbackOptionsResponseType' => 'EbayWsdl\\SetSellingManagerFeedbackOptionsResponseType',
      'SetSellingManagerItemAutomationRuleRequestType' => 'EbayWsdl\\SetSellingManagerItemAutomationRuleRequestType',
      'SetSellingManagerItemAutomationRuleResponseType' => 'EbayWsdl\\SetSellingManagerItemAutomationRuleResponseType',
      'SetSellingManagerTemplateAutomationRuleRequestType' => 'EbayWsdl\\SetSellingManagerTemplateAutomationRuleRequestType',
      'SetSellingManagerTemplateAutomationRuleResponseType' => 'EbayWsdl\\SetSellingManagerTemplateAutomationRuleResponseType',
      'SetShippingDiscountProfilesRequestType' => 'EbayWsdl\\SetShippingDiscountProfilesRequestType',
      'SetShippingDiscountProfilesResponseType' => 'EbayWsdl\\SetShippingDiscountProfilesResponseType',
      'SetStoreRequestType' => 'EbayWsdl\\SetStoreRequestType',
      'SetStoreResponseType' => 'EbayWsdl\\SetStoreResponseType',
      'SetStoreCategoriesRequestType' => 'EbayWsdl\\SetStoreCategoriesRequestType',
      'SetStoreCategoriesResponseType' => 'EbayWsdl\\SetStoreCategoriesResponseType',
      'SetStoreCustomPageRequestType' => 'EbayWsdl\\SetStoreCustomPageRequestType',
      'SetStoreCustomPageResponseType' => 'EbayWsdl\\SetStoreCustomPageResponseType',
      'SetStorePreferencesRequestType' => 'EbayWsdl\\SetStorePreferencesRequestType',
      'SetStorePreferencesResponseType' => 'EbayWsdl\\SetStorePreferencesResponseType',
      'SetTaxTableRequestType' => 'EbayWsdl\\SetTaxTableRequestType',
      'SetTaxTableResponseType' => 'EbayWsdl\\SetTaxTableResponseType',
      'SetUserNotesRequestType' => 'EbayWsdl\\SetUserNotesRequestType',
      'SetUserNotesResponseType' => 'EbayWsdl\\SetUserNotesResponseType',
      'SetUserPreferencesRequestType' => 'EbayWsdl\\SetUserPreferencesRequestType',
      'SetUserPreferencesResponseType' => 'EbayWsdl\\SetUserPreferencesResponseType',
      'UploadSiteHostedPicturesRequestType' => 'EbayWsdl\\UploadSiteHostedPicturesRequestType',
      'UploadSiteHostedPicturesResponseType' => 'EbayWsdl\\UploadSiteHostedPicturesResponseType',
      'ValidateChallengeInputRequestType' => 'EbayWsdl\\ValidateChallengeInputRequestType',
      'ValidateChallengeInputResponseType' => 'EbayWsdl\\ValidateChallengeInputResponseType',
      'ValidateTestUserRegistrationRequestType' => 'EbayWsdl\\ValidateTestUserRegistrationRequestType',
      'ValidateTestUserRegistrationResponseType' => 'EbayWsdl\\ValidateTestUserRegistrationResponseType',
      'VeROReportItemsRequestType' => 'EbayWsdl\\VeROReportItemsRequestType',
      'VeROReportItemsResponseType' => 'EbayWsdl\\VeROReportItemsResponseType',
      'VerifyAddFixedPriceItemRequestType' => 'EbayWsdl\\VerifyAddFixedPriceItemRequestType',
      'VerifyAddFixedPriceItemResponseType' => 'EbayWsdl\\VerifyAddFixedPriceItemResponseType',
      'VerifyAddItemRequestType' => 'EbayWsdl\\VerifyAddItemRequestType',
      'VerifyAddItemResponseType' => 'EbayWsdl\\VerifyAddItemResponseType',
      'VerifyAddSecondChanceItemRequestType' => 'EbayWsdl\\VerifyAddSecondChanceItemRequestType',
      'VerifyAddSecondChanceItemResponseType' => 'EbayWsdl\\VerifyAddSecondChanceItemResponseType',
      'VerifyRelistItemRequestType' => 'EbayWsdl\\VerifyRelistItemRequestType',
      'VerifyRelistItemResponseType' => 'EbayWsdl\\VerifyRelistItemResponseType',
      'AbstractRequestType' => 'EbayWsdl\\AbstractRequestType',
      'AbstractResponseType' => 'EbayWsdl\\AbstractResponseType',
      'BotBlockRequestType' => 'EbayWsdl\\BotBlockRequestType',
      'BotBlockResponseType' => 'EbayWsdl\\BotBlockResponseType',
      'CustomSecurityHeaderType' => 'EbayWsdl\\CustomSecurityHeaderType',
      'DisputeFilterCountType' => 'EbayWsdl\\DisputeFilterCountType',
      'DisputeMessageType' => 'EbayWsdl\\DisputeMessageType',
      'DisputeResolutionType' => 'EbayWsdl\\DisputeResolutionType',
      'DuplicateInvocationDetailsType' => 'EbayWsdl\\DuplicateInvocationDetailsType',
      'ErrorParameterType' => 'EbayWsdl\\ErrorParameterType',
      'ErrorType' => 'EbayWsdl\\ErrorType',
      'FaultDetailsType' => 'EbayWsdl\\FaultDetailsType',
      'MeasureType' => 'EbayWsdl\\MeasureType',
      'PaginationType' => 'EbayWsdl\\PaginationType',
      'QuantityType' => 'EbayWsdl\\QuantityType',
      'UserIdPasswordType' => 'EbayWsdl\\UserIdPasswordType',
      'XMLRequesterCredentialsType' => 'EbayWsdl\\XMLRequesterCredentialsType',
      'ASQPreferencesType' => 'EbayWsdl\\ASQPreferencesType',
      'AccountEntriesType' => 'EbayWsdl\\AccountEntriesType',
      'AccountEntryType' => 'EbayWsdl\\AccountEntryType',
      'AccountSummaryType' => 'EbayWsdl\\AccountSummaryType',
      'AdFormatEnabledDefinitionType' => 'EbayWsdl\\AdFormatEnabledDefinitionType',
      'AdFormatLeadType' => 'EbayWsdl\\AdFormatLeadType',
      'AddItemRequestContainerType' => 'EbayWsdl\\AddItemRequestContainerType',
      'AddItemResponseContainerType' => 'EbayWsdl\\AddItemResponseContainerType',
      'AddMemberMessagesAAQToBidderRequestContainerType' => 'EbayWsdl\\AddMemberMessagesAAQToBidderRequestContainerType',
      'AddMemberMessagesAAQToBidderResponseContainerType' => 'EbayWsdl\\AddMemberMessagesAAQToBidderResponseContainerType',
      'AdditionalAccountType' => 'EbayWsdl\\AdditionalAccountType',
      'AdditionalCompatibilityEnabledDefinitionType' => 'EbayWsdl\\AdditionalCompatibilityEnabledDefinitionType',
      'AddressType' => 'EbayWsdl\\AddressType',
      'AffiliateTrackingDetailsType' => 'EbayWsdl\\AffiliateTrackingDetailsType',
      'AmountType' => 'EbayWsdl\\AmountType',
      'AnnouncementMessageType' => 'EbayWsdl\\AnnouncementMessageType',
      'ApiAccessRuleType' => 'EbayWsdl\\ApiAccessRuleType',
      'ApplicationDeliveryPreferencesType' => 'EbayWsdl\\ApplicationDeliveryPreferencesType',
      'AttributeArrayType' => 'EbayWsdl\\AttributeArrayType',
      'AttributeConversionEnabledFeatureDefinitionType' => 'EbayWsdl\\AttributeConversionEnabledFeatureDefinitionType',
      'AttributeRecommendationsType' => 'EbayWsdl\\AttributeRecommendationsType',
      'AttributeSetArrayType' => 'EbayWsdl\\AttributeSetArrayType',
      'AttributeSetType' => 'EbayWsdl\\AttributeSetType',
      'AttributeType' => 'EbayWsdl\\AttributeType',
      'AverageRatingDetailArrayType' => 'EbayWsdl\\AverageRatingDetailArrayType',
      'AverageRatingDetailsType' => 'EbayWsdl\\AverageRatingDetailsType',
      'AverageRatingSummaryType' => 'EbayWsdl\\AverageRatingSummaryType',
      'Base64BinaryType' => 'EbayWsdl\\Base64BinaryType',
      'BasicAmountType' => 'EbayWsdl\\BasicAmountType',
      'BasicUpgradePackEnabledDefinitionType' => 'EbayWsdl\\BasicUpgradePackEnabledDefinitionType',
      'BestOfferArrayType' => 'EbayWsdl\\BestOfferArrayType',
      'BestOfferAutoAcceptEnabledDefinitionType' => 'EbayWsdl\\BestOfferAutoAcceptEnabledDefinitionType',
      'BestOfferAutoDeclineEnabledDefinitionType' => 'EbayWsdl\\BestOfferAutoDeclineEnabledDefinitionType',
      'BestOfferCounterEnabledDefinitionType' => 'EbayWsdl\\BestOfferCounterEnabledDefinitionType',
      'BestOfferDetailsType' => 'EbayWsdl\\BestOfferDetailsType',
      'BestOfferEnabledDefinitionType' => 'EbayWsdl\\BestOfferEnabledDefinitionType',
      'BestOfferType' => 'EbayWsdl\\BestOfferType',
      'BidApprovalArrayType' => 'EbayWsdl\\BidApprovalArrayType',
      'BidApprovalType' => 'EbayWsdl\\BidApprovalType',
      'BidAssistantListType' => 'EbayWsdl\\BidAssistantListType',
      'BidGroupArrayType' => 'EbayWsdl\\BidGroupArrayType',
      'BidGroupItemType' => 'EbayWsdl\\BidGroupItemType',
      'BidGroupType' => 'EbayWsdl\\BidGroupType',
      'BidderDetailArrayType' => 'EbayWsdl\\BidderDetailArrayType',
      'BidderDetailType' => 'EbayWsdl\\BidderDetailType',
      'BidderNoticePreferencesType' => 'EbayWsdl\\BidderNoticePreferencesType',
      'BiddingDetailsType' => 'EbayWsdl\\BiddingDetailsType',
      'BiddingSummaryType' => 'EbayWsdl\\BiddingSummaryType',
      'BrandMPNIdentifierEnabledDefinitionType' => 'EbayWsdl\\BrandMPNIdentifierEnabledDefinitionType',
      'BrandMPNType' => 'EbayWsdl\\BrandMPNType',
      'BusinessSellerDetailsType' => 'EbayWsdl\\BusinessSellerDetailsType',
      'BuyerGuaranteeEnabledDefinitionType' => 'EbayWsdl\\BuyerGuaranteeEnabledDefinitionType',
      'BuyerProtectionDetailsType' => 'EbayWsdl\\BuyerProtectionDetailsType',
      'BuyerRequirementDetailsType' => 'EbayWsdl\\BuyerRequirementDetailsType',
      'BuyerRoleMetricsType' => 'EbayWsdl\\BuyerRoleMetricsType',
      'BuyerSatisfactionDashboardType' => 'EbayWsdl\\BuyerSatisfactionDashboardType',
      'BuyerType' => 'EbayWsdl\\BuyerType',
      'BuyingGuideDetailsType' => 'EbayWsdl\\BuyingGuideDetailsType',
      'BuyingGuideType' => 'EbayWsdl\\BuyingGuideType',
      'BuyingSummaryType' => 'EbayWsdl\\BuyingSummaryType',
      'CalculatedHandlingDiscountType' => 'EbayWsdl\\CalculatedHandlingDiscountType',
      'CalculatedShippingDiscountType' => 'EbayWsdl\\CalculatedShippingDiscountType',
      'CalculatedShippingPreferencesType' => 'EbayWsdl\\CalculatedShippingPreferencesType',
      'CalculatedShippingRateType' => 'EbayWsdl\\CalculatedShippingRateType',
      'CancelOfferArrayType' => 'EbayWsdl\\CancelOfferArrayType',
      'CancelOfferType' => 'EbayWsdl\\CancelOfferType',
      'CartItemType' => 'EbayWsdl\\CartItemType',
      'CatalogProductType' => 'EbayWsdl\\CatalogProductType',
      'CategoryArrayType' => 'EbayWsdl\\CategoryArrayType',
      'CategoryFeatureType' => 'EbayWsdl\\CategoryFeatureType',
      'CategoryGroupType' => 'EbayWsdl\\CategoryGroupType',
      'CategoryItemSpecificsType' => 'EbayWsdl\\CategoryItemSpecificsType',
      'CategoryMappingType' => 'EbayWsdl\\CategoryMappingType',
      'CategoryType' => 'EbayWsdl\\CategoryType',
      'CharacteristicSetIDsType' => 'EbayWsdl\\CharacteristicSetIDsType',
      'CharacteristicType' => 'EbayWsdl\\CharacteristicType',
      'CharacteristicsSetProductHistogramType' => 'EbayWsdl\\CharacteristicsSetProductHistogramType',
      'CharacteristicsSetType' => 'EbayWsdl\\CharacteristicsSetType',
      'CharityAffiliationDetailType' => 'EbayWsdl\\CharityAffiliationDetailType',
      'CharityAffiliationDetailsType' => 'EbayWsdl\\CharityAffiliationDetailsType',
      'CharityAffiliationType' => 'EbayWsdl\\CharityAffiliationType',
      'CharityAffiliationsType' => 'EbayWsdl\\CharityAffiliationsType',
      'CharityIDType' => 'EbayWsdl\\CharityIDType',
      'CharityInfoType' => 'EbayWsdl\\CharityInfoType',
      'NonProfitSocialAddressType' => 'EbayWsdl\\NonProfitSocialAddressType',
      'CharitySellerType' => 'EbayWsdl\\CharitySellerType',
      'CharityType' => 'EbayWsdl\\CharityType',
      'CheckoutOrderDetailType' => 'EbayWsdl\\CheckoutOrderDetailType',
      'CheckoutStatusType' => 'EbayWsdl\\CheckoutStatusType',
      'ClassifiedAdAutoAcceptEnabledDefinitionType' => 'EbayWsdl\\ClassifiedAdAutoAcceptEnabledDefinitionType',
      'ClassifiedAdAutoDeclineEnabledDefinitionType' => 'EbayWsdl\\ClassifiedAdAutoDeclineEnabledDefinitionType',
      'ClassifiedAdBestOfferEnabledDefinitionType' => 'EbayWsdl\\ClassifiedAdBestOfferEnabledDefinitionType',
      'ClassifiedAdCompanyNameEnabledDefinitionType' => 'EbayWsdl\\ClassifiedAdCompanyNameEnabledDefinitionType',
      'ClassifiedAdContactByAddressEnabledDefinitionType' => 'EbayWsdl\\ClassifiedAdContactByAddressEnabledDefinitionType',
      'ClassifiedAdContactByEmailEnabledDefintionType' => 'EbayWsdl\\ClassifiedAdContactByEmailEnabledDefintionType',
      'ClassifiedAdContactByPhoneEnabledDefinitionType' => 'EbayWsdl\\ClassifiedAdContactByPhoneEnabledDefinitionType',
      'ClassifiedAdCounterOfferEnabledDefinitionType' => 'EbayWsdl\\ClassifiedAdCounterOfferEnabledDefinitionType',
      'ClassifiedAdPayPerLeadEnabledDefinitionType' => 'EbayWsdl\\ClassifiedAdPayPerLeadEnabledDefinitionType',
      'ClassifiedAdPaymentMethodEnabledDefinitionType' => 'EbayWsdl\\ClassifiedAdPaymentMethodEnabledDefinitionType',
      'ClassifiedAdPhoneCountDefinitionType' => 'EbayWsdl\\ClassifiedAdPhoneCountDefinitionType',
      'ClassifiedAdShippingMethodEnabledDefinitionType' => 'EbayWsdl\\ClassifiedAdShippingMethodEnabledDefinitionType',
      'ClassifiedAdStreetCountDefinitionType' => 'EbayWsdl\\ClassifiedAdStreetCountDefinitionType',
      'CombinedFixedPriceTreatmentEnabledDefinitionType' => 'EbayWsdl\\CombinedFixedPriceTreatmentEnabledDefinitionType',
      'CombinedPaymentPreferencesType' => 'EbayWsdl\\CombinedPaymentPreferencesType',
      'CompatibleVehicleTypeDefinitionType' => 'EbayWsdl\\CompatibleVehicleTypeDefinitionType',
      'ConditionEnabledDefinitionType' => 'EbayWsdl\\ConditionEnabledDefinitionType',
      'ConditionType' => 'EbayWsdl\\ConditionType',
      'ConditionValuesDefinitionType' => 'EbayWsdl\\ConditionValuesDefinitionType',
      'ConditionValuesType' => 'EbayWsdl\\ConditionValuesType',
      'ContactHoursDetailsType' => 'EbayWsdl\\ContactHoursDetailsType',
      'ContextSearchAssetType' => 'EbayWsdl\\ContextSearchAssetType',
      'CountryDetailsType' => 'EbayWsdl\\CountryDetailsType',
      'CrossBorderTradeAustraliaEnabledDefinitionType' => 'EbayWsdl\\CrossBorderTradeAustraliaEnabledDefinitionType',
      'CrossBorderTradeGBEnabledDefinitionType' => 'EbayWsdl\\CrossBorderTradeGBEnabledDefinitionType',
      'CrossBorderTradeNorthAmericaEnabledDefinitionType' => 'EbayWsdl\\CrossBorderTradeNorthAmericaEnabledDefinitionType',
      'CrossPromotionPreferencesType' => 'EbayWsdl\\CrossPromotionPreferencesType',
      'CrossPromotionsType' => 'EbayWsdl\\CrossPromotionsType',
      'CurrencyDetailsType' => 'EbayWsdl\\CurrencyDetailsType',
      'DataElementSetType' => 'EbayWsdl\\DataElementSetType',
      'DateType' => 'EbayWsdl\\DateType',
      'DeliveryURLDetailType' => 'EbayWsdl\\DeliveryURLDetailType',
      'DepositSupportedDefinitionType' => 'EbayWsdl\\DepositSupportedDefinitionType',
      'DescriptionTemplateType' => 'EbayWsdl\\DescriptionTemplateType',
      'DiscountPriceInfoType' => 'EbayWsdl\\DiscountPriceInfoType',
      'DiscountProfileType' => 'EbayWsdl\\DiscountProfileType',
      'DispatchCutoffTimePreferencesType' => 'EbayWsdl\\DispatchCutoffTimePreferencesType',
      'DispatchTimeMaxDetailsType' => 'EbayWsdl\\DispatchTimeMaxDetailsType',
      'DisputeArrayType' => 'EbayWsdl\\DisputeArrayType',
      'DisputeType' => 'EbayWsdl\\DisputeType',
      'DistanceType' => 'EbayWsdl\\DistanceType',
      'DutchBINEnabledDefinitionType' => 'EbayWsdl\\DutchBINEnabledDefinitionType',
      'EANIdentifierEnabledDefinitionType' => 'EbayWsdl\\EANIdentifierEnabledDefinitionType',
      'EndItemRequestContainerType' => 'EbayWsdl\\EndItemRequestContainerType',
      'EndItemResponseContainerType' => 'EbayWsdl\\EndItemResponseContainerType',
      'EndOfAuctionEmailPreferencesType' => 'EbayWsdl\\EndOfAuctionEmailPreferencesType',
      'ExcludeShippingLocationDetailsType' => 'EbayWsdl\\ExcludeShippingLocationDetailsType',
      'ExpressConditionRequiredDefinitionType' => 'EbayWsdl\\ExpressConditionRequiredDefinitionType',
      'ExpressEnabledDefinitionType' => 'EbayWsdl\\ExpressEnabledDefinitionType',
      'ExpressItemRequirementsType' => 'EbayWsdl\\ExpressItemRequirementsType',
      'ExpressPicturesRequiredDefinitionType' => 'EbayWsdl\\ExpressPicturesRequiredDefinitionType',
      'ExtendedContactDetailsType' => 'EbayWsdl\\ExtendedContactDetailsType',
      'ExtendedProductFinderIDType' => 'EbayWsdl\\ExtendedProductFinderIDType',
      'ExternalAlertIDArrayType' => 'EbayWsdl\\ExternalAlertIDArrayType',
      'ExternalProductIDType' => 'EbayWsdl\\ExternalProductIDType',
      'ExternalTransactionType' => 'EbayWsdl\\ExternalTransactionType',
      'FeatureDefinitionsType' => 'EbayWsdl\\FeatureDefinitionsType',
      'FeatureEligibilityType' => 'EbayWsdl\\FeatureEligibilityType',
      'FeeType' => 'EbayWsdl\\FeeType',
      'FeedbackCommentArrayType' => 'EbayWsdl\\FeedbackCommentArrayType',
      'FeedbackDetailArrayType' => 'EbayWsdl\\FeedbackDetailArrayType',
      'FeedbackDetailType' => 'EbayWsdl\\FeedbackDetailType',
      'FeedbackInfoType' => 'EbayWsdl\\FeedbackInfoType',
      'FeedbackPeriodArrayType' => 'EbayWsdl\\FeedbackPeriodArrayType',
      'FeedbackPeriodType' => 'EbayWsdl\\FeedbackPeriodType',
      'FeedbackRequirementsType' => 'EbayWsdl\\FeedbackRequirementsType',
      'FeedbackSummaryType' => 'EbayWsdl\\FeedbackSummaryType',
      'FeesType' => 'EbayWsdl\\FeesType',
      'FlatRateInsuranceRangeCostType' => 'EbayWsdl\\FlatRateInsuranceRangeCostType',
      'FlatShippingDiscountType' => 'EbayWsdl\\FlatShippingDiscountType',
      'FlatShippingPreferencesType' => 'EbayWsdl\\FlatShippingPreferencesType',
      'FreeGalleryPlusEnabledDefinitionType' => 'EbayWsdl\\FreeGalleryPlusEnabledDefinitionType',
      'FreePicturePackEnabledDefinitionType' => 'EbayWsdl\\FreePicturePackEnabledDefinitionType',
      'GetRecommendationsRequestContainerType' => 'EbayWsdl\\GetRecommendationsRequestContainerType',
      'GetRecommendationsResponseContainerType' => 'EbayWsdl\\GetRecommendationsResponseContainerType',
      'GlobalShippingEnabledDefinitionType' => 'EbayWsdl\\GlobalShippingEnabledDefinitionType',
      'Group1MaxFlatShippingCostDefinitionType' => 'EbayWsdl\\Group1MaxFlatShippingCostDefinitionType',
      'Group2MaxFlatShippingCostDefinitionType' => 'EbayWsdl\\Group2MaxFlatShippingCostDefinitionType',
      'Group3MaxFlatShippingCostDefinitionType' => 'EbayWsdl\\Group3MaxFlatShippingCostDefinitionType',
      'HandlingTimeEnabledDefinitionType' => 'EbayWsdl\\HandlingTimeEnabledDefinitionType',
      'HistogramEntryType' => 'EbayWsdl\\HistogramEntryType',
      'HomePageFeaturedEnabledDefinitionType' => 'EbayWsdl\\HomePageFeaturedEnabledDefinitionType',
      'INEscrowWorkflowTimelineDefinitionType' => 'EbayWsdl\\INEscrowWorkflowTimelineDefinitionType',
      'ISBNIdentifierEnabledDefinitionType' => 'EbayWsdl\\ISBNIdentifierEnabledDefinitionType',
      'InsuranceDetailsType' => 'EbayWsdl\\InsuranceDetailsType',
      'IntegratedMerchantCreditCardInfoType' => 'EbayWsdl\\IntegratedMerchantCreditCardInfoType',
      'InternationalShippingServiceOptionsType' => 'EbayWsdl\\InternationalShippingServiceOptionsType',
      'InventoryFeesType' => 'EbayWsdl\\InventoryFeesType',
      'InventoryStatusType' => 'EbayWsdl\\InventoryStatusType',
      'ItemArrayType' => 'EbayWsdl\\ItemArrayType',
      'ItemBestOffersArrayType' => 'EbayWsdl\\ItemBestOffersArrayType',
      'ItemBestOffersType' => 'EbayWsdl\\ItemBestOffersType',
      'ItemBidDetailsType' => 'EbayWsdl\\ItemBidDetailsType',
      'ItemCompatibilityEnabledDefinitionType' => 'EbayWsdl\\ItemCompatibilityEnabledDefinitionType',
      'ItemCompatibilityListType' => 'EbayWsdl\\ItemCompatibilityListType',
      'ItemCompatibilityType' => 'EbayWsdl\\ItemCompatibilityType',
      'ItemIDArrayType' => 'EbayWsdl\\ItemIDArrayType',
      'ItemListCustomizationType' => 'EbayWsdl\\ItemListCustomizationType',
      'ItemPolicyViolationType' => 'EbayWsdl\\ItemPolicyViolationType',
      'ItemRatingDetailArrayType' => 'EbayWsdl\\ItemRatingDetailArrayType',
      'ItemRatingDetailsType' => 'EbayWsdl\\ItemRatingDetailsType',
      'ItemSpecificDetailsType' => 'EbayWsdl\\ItemSpecificDetailsType',
      'ItemSpecificsEnabledDefinitionType' => 'EbayWsdl\\ItemSpecificsEnabledDefinitionType',
      'ItemTotalsType' => 'EbayWsdl\\ItemTotalsType',
      'ItemTransactionIDArrayType' => 'EbayWsdl\\ItemTransactionIDArrayType',
      'ItemTransactionIDType' => 'EbayWsdl\\ItemTransactionIDType',
      'ItemType' => 'EbayWsdl\\ItemType',
      'ItemsCanceledEventType' => 'EbayWsdl\\ItemsCanceledEventType',
      'LabelType' => 'EbayWsdl\\LabelType',
      'LineItemType' => 'EbayWsdl\\LineItemType',
      'ListingAnalyzerRecommendationsType' => 'EbayWsdl\\ListingAnalyzerRecommendationsType',
      'ListingCheckoutRedirectPreferenceType' => 'EbayWsdl\\ListingCheckoutRedirectPreferenceType',
      'ListingDesignerType' => 'EbayWsdl\\ListingDesignerType',
      'ListingDetailsType' => 'EbayWsdl\\ListingDetailsType',
      'ListingDurationDefinitionType' => 'EbayWsdl\\ListingDurationDefinitionType',
      'ListingDurationDefinitionsType' => 'EbayWsdl\\ListingDurationDefinitionsType',
      'ListingDurationReferenceType' => 'EbayWsdl\\ListingDurationReferenceType',
      'ListingEnhancementDurationDefinitionType' => 'EbayWsdl\\ListingEnhancementDurationDefinitionType',
      'ListingEnhancementDurationReferenceType' => 'EbayWsdl\\ListingEnhancementDurationReferenceType',
      'ListingFeatureDetailsType' => 'EbayWsdl\\ListingFeatureDetailsType',
      'ListingRecommendationType' => 'EbayWsdl\\ListingRecommendationType',
      'ListingRecommendationsType' => 'EbayWsdl\\ListingRecommendationsType',
      'ListingStartPriceDetailsType' => 'EbayWsdl\\ListingStartPriceDetailsType',
      'ListingTipArrayType' => 'EbayWsdl\\ListingTipArrayType',
      'ListingTipFieldType' => 'EbayWsdl\\ListingTipFieldType',
      'ListingTipMessageType' => 'EbayWsdl\\ListingTipMessageType',
      'ListingTipType' => 'EbayWsdl\\ListingTipType',
      'LocalListingDistancesNonSubscriptionDefinitionType' => 'EbayWsdl\\LocalListingDistancesNonSubscriptionDefinitionType',
      'LocalListingDistancesRegularDefinitionType' => 'EbayWsdl\\LocalListingDistancesRegularDefinitionType',
      'LocalListingDistancesSpecialtyDefinitionType' => 'EbayWsdl\\LocalListingDistancesSpecialtyDefinitionType',
      'LocalMarketAdFormatEnabledDefinitionType' => 'EbayWsdl\\LocalMarketAdFormatEnabledDefinitionType',
      'LocalMarketAutoAcceptEnabledDefinitionType' => 'EbayWsdl\\LocalMarketAutoAcceptEnabledDefinitionType',
      'LocalMarketAutoDeclineEnabledDefinitionType' => 'EbayWsdl\\LocalMarketAutoDeclineEnabledDefinitionType',
      'LocalMarketBestOfferEnabledDefinitionType' => 'EbayWsdl\\LocalMarketBestOfferEnabledDefinitionType',
      'LocalMarketCompanyNameEnabledDefinitionType' => 'EbayWsdl\\LocalMarketCompanyNameEnabledDefinitionType',
      'LocalMarketContactByAddressEnabledDefinitionType' => 'EbayWsdl\\LocalMarketContactByAddressEnabledDefinitionType',
      'LocalMarketContactByEmailEnabledDefinitionType' => 'EbayWsdl\\LocalMarketContactByEmailEnabledDefinitionType',
      'LocalMarketContactByPhoneEnabledDefinitionType' => 'EbayWsdl\\LocalMarketContactByPhoneEnabledDefinitionType',
      'LocalMarketCounterOfferEnabledDefinitionType' => 'EbayWsdl\\LocalMarketCounterOfferEnabledDefinitionType',
      'LocalMarketNonSubscriptionDefinitionType' => 'EbayWsdl\\LocalMarketNonSubscriptionDefinitionType',
      'LocalMarketPaymentMethodCheckOutEnabledDefinitionType' => 'EbayWsdl\\LocalMarketPaymentMethodCheckOutEnabledDefinitionType',
      'LocalMarketPhoneCountDefinitionType' => 'EbayWsdl\\LocalMarketPhoneCountDefinitionType',
      'LocalMarketPremiumSubscriptionDefinitionType' => 'EbayWsdl\\LocalMarketPremiumSubscriptionDefinitionType',
      'LocalMarketRegularSubscriptionDefinitionType' => 'EbayWsdl\\LocalMarketRegularSubscriptionDefinitionType',
      'LocalMarketSellerContactDetailsEnabledDefinitionType' => 'EbayWsdl\\LocalMarketSellerContactDetailsEnabledDefinitionType',
      'LocalMarketShippingMethodEnabledDefinitionType' => 'EbayWsdl\\LocalMarketShippingMethodEnabledDefinitionType',
      'LocalMarketSpecialitySubscriptionDefinitionType' => 'EbayWsdl\\LocalMarketSpecialitySubscriptionDefinitionType',
      'LocalMarketStreetCountDefinitionType' => 'EbayWsdl\\LocalMarketStreetCountDefinitionType',
      'LocalSearchType' => 'EbayWsdl\\LocalSearchType',
      'LookupAttributeArrayType' => 'EbayWsdl\\LookupAttributeArrayType',
      'LookupAttributeType' => 'EbayWsdl\\LookupAttributeType',
      'MarkUpMarkDownEventType' => 'EbayWsdl\\MarkUpMarkDownEventType',
      'MarkUpMarkDownHistoryType' => 'EbayWsdl\\MarkUpMarkDownHistoryType',
      'MaxFlatShippingCostCBTExemptDefinitionType' => 'EbayWsdl\\MaxFlatShippingCostCBTExemptDefinitionType',
      'MaxFlatShippingCostDefinitionType' => 'EbayWsdl\\MaxFlatShippingCostDefinitionType',
      'MaxGranularFitmentCountDefinitionType' => 'EbayWsdl\\MaxGranularFitmentCountDefinitionType',
      'MaxItemCompatibilityDefinitionType' => 'EbayWsdl\\MaxItemCompatibilityDefinitionType',
      'MaximumBuyerPolicyViolationsDetailsType' => 'EbayWsdl\\MaximumBuyerPolicyViolationsDetailsType',
      'MaximumBuyerPolicyViolationsType' => 'EbayWsdl\\MaximumBuyerPolicyViolationsType',
      'MaximumItemRequirementsDetailsType' => 'EbayWsdl\\MaximumItemRequirementsDetailsType',
      'MaximumItemRequirementsType' => 'EbayWsdl\\MaximumItemRequirementsType',
      'MaximumUnpaidItemStrikesCountDetailsType' => 'EbayWsdl\\MaximumUnpaidItemStrikesCountDetailsType',
      'MaximumUnpaidItemStrikesDurationDetailsType' => 'EbayWsdl\\MaximumUnpaidItemStrikesDurationDetailsType',
      'MaximumUnpaidItemStrikesInfoDetailsType' => 'EbayWsdl\\MaximumUnpaidItemStrikesInfoDetailsType',
      'MaximumUnpaidItemStrikesInfoType' => 'EbayWsdl\\MaximumUnpaidItemStrikesInfoType',
      'MemberMessageExchangeArrayType' => 'EbayWsdl\\MemberMessageExchangeArrayType',
      'MemberMessageExchangeType' => 'EbayWsdl\\MemberMessageExchangeType',
      'MemberMessageType' => 'EbayWsdl\\MemberMessageType',
      'MessageMediaType' => 'EbayWsdl\\MessageMediaType',
      'MinItemCompatibilityDefinitionType' => 'EbayWsdl\\MinItemCompatibilityDefinitionType',
      'MinimumFeedbackScoreDetailsType' => 'EbayWsdl\\MinimumFeedbackScoreDetailsType',
      'MinimumReservePriceDefinitionType' => 'EbayWsdl\\MinimumReservePriceDefinitionType',
      'ModifyNameArrayType' => 'EbayWsdl\\ModifyNameArrayType',
      'ModifyNameType' => 'EbayWsdl\\ModifyNameType',
      'MotorsLocalMarketEnabledDefinitionType' => 'EbayWsdl\\MotorsLocalMarketEnabledDefinitionType',
      'MultiLegShipmentType' => 'EbayWsdl\\MultiLegShipmentType',
      'MultiLegShippingDetailsType' => 'EbayWsdl\\MultiLegShippingDetailsType',
      'MultiLegShippingServiceType' => 'EbayWsdl\\MultiLegShippingServiceType',
      'MyMessagesAlertArrayType' => 'EbayWsdl\\MyMessagesAlertArrayType',
      'MyMessagesAlertIDArrayType' => 'EbayWsdl\\MyMessagesAlertIDArrayType',
      'MyMessagesAlertType' => 'EbayWsdl\\MyMessagesAlertType',
      'MyMessagesExternalMessageIDArrayType' => 'EbayWsdl\\MyMessagesExternalMessageIDArrayType',
      'MyMessagesFolderSummaryType' => 'EbayWsdl\\MyMessagesFolderSummaryType',
      'MyMessagesFolderType' => 'EbayWsdl\\MyMessagesFolderType',
      'MyMessagesForwardDetailsType' => 'EbayWsdl\\MyMessagesForwardDetailsType',
      'MyMessagesMessageArrayType' => 'EbayWsdl\\MyMessagesMessageArrayType',
      'MyMessagesMessageIDArrayType' => 'EbayWsdl\\MyMessagesMessageIDArrayType',
      'MyMessagesMessageType' => 'EbayWsdl\\MyMessagesMessageType',
      'MyMessagesResponseDetailsType' => 'EbayWsdl\\MyMessagesResponseDetailsType',
      'MyMessagesSummaryType' => 'EbayWsdl\\MyMessagesSummaryType',
      'MyeBayFavoriteSearchListType' => 'EbayWsdl\\MyeBayFavoriteSearchListType',
      'MyeBayFavoriteSearchType' => 'EbayWsdl\\MyeBayFavoriteSearchType',
      'MyeBayFavoriteSellerListType' => 'EbayWsdl\\MyeBayFavoriteSellerListType',
      'MyeBayFavoriteSellerType' => 'EbayWsdl\\MyeBayFavoriteSellerType',
      'MyeBaySecondChanceOfferListType' => 'EbayWsdl\\MyeBaySecondChanceOfferListType',
      'MyeBaySelectionType' => 'EbayWsdl\\MyeBaySelectionType',
      'MyeBaySellingSummaryType' => 'EbayWsdl\\MyeBaySellingSummaryType',
      'NameRecommendationType' => 'EbayWsdl\\NameRecommendationType',
      'NameValueListArrayType' => 'EbayWsdl\\NameValueListArrayType',
      'NameValueListType' => 'EbayWsdl\\NameValueListType',
      'NameValueRelationshipType' => 'EbayWsdl\\NameValueRelationshipType',
      'NonProfitAddressType' => 'EbayWsdl\\NonProfitAddressType',
      'NonSubscriptionDefinitionType' => 'EbayWsdl\\NonSubscriptionDefinitionType',
      'NotificationDetailsArrayType' => 'EbayWsdl\\NotificationDetailsArrayType',
      'NotificationDetailsType' => 'EbayWsdl\\NotificationDetailsType',
      'NotificationEnableArrayType' => 'EbayWsdl\\NotificationEnableArrayType',
      'NotificationEnableType' => 'EbayWsdl\\NotificationEnableType',
      'NotificationEventPropertyType' => 'EbayWsdl\\NotificationEventPropertyType',
      'NotificationMessageType' => 'EbayWsdl\\NotificationMessageType',
      'NotificationStatisticsType' => 'EbayWsdl\\NotificationStatisticsType',
      'NotificationUserDataType' => 'EbayWsdl\\NotificationUserDataType',
      'NumberOfPolicyViolationsDetailsType' => 'EbayWsdl\\NumberOfPolicyViolationsDetailsType',
      'OfferArrayType' => 'EbayWsdl\\OfferArrayType',
      'OfferType' => 'EbayWsdl\\OfferType',
      'OrderArrayType' => 'EbayWsdl\\OrderArrayType',
      'OrderIDArrayType' => 'EbayWsdl\\OrderIDArrayType',
      'OrderTransactionArrayType' => 'EbayWsdl\\OrderTransactionArrayType',
      'OrderTransactionType' => 'EbayWsdl\\OrderTransactionType',
      'OrderType' => 'EbayWsdl\\OrderType',
      'PaginatedItemArrayType' => 'EbayWsdl\\PaginatedItemArrayType',
      'PaginatedOrderTransactionArrayType' => 'EbayWsdl\\PaginatedOrderTransactionArrayType',
      'PaginatedTransactionArrayType' => 'EbayWsdl\\PaginatedTransactionArrayType',
      'PaginationResultType' => 'EbayWsdl\\PaginationResultType',
      'PaisaPayFullEscrowEnabledDefinitionType' => 'EbayWsdl\\PaisaPayFullEscrowEnabledDefinitionType',
      'PayPalBuyerProtectionEnabledDefinitionType' => 'EbayWsdl\\PayPalBuyerProtectionEnabledDefinitionType',
      'PayPalRequiredDefinitionType' => 'EbayWsdl\\PayPalRequiredDefinitionType',
      'PayPalRequiredForStoreOwnerDefinitionType' => 'EbayWsdl\\PayPalRequiredForStoreOwnerDefinitionType',
      'PaymentDetailsType' => 'EbayWsdl\\PaymentDetailsType',
      'PaymentHoldDetailType' => 'EbayWsdl\\PaymentHoldDetailType',
      'PaymentInformationCodeType' => 'EbayWsdl\\PaymentInformationCodeType',
      'PaymentInformationType' => 'EbayWsdl\\PaymentInformationType',
      'PaymentMethodDefinitionType' => 'EbayWsdl\\PaymentMethodDefinitionType',
      'PaymentOptionDetailsType' => 'EbayWsdl\\PaymentOptionDetailsType',
      'PaymentOptionsGroupEnabledDefinitionType' => 'EbayWsdl\\PaymentOptionsGroupEnabledDefinitionType',
      'PaymentTransactionCodeType' => 'EbayWsdl\\PaymentTransactionCodeType',
      'PaymentTransactionType' => 'EbayWsdl\\PaymentTransactionType',
      'PaymentsInformationCodeType' => 'EbayWsdl\\PaymentsInformationCodeType',
      'PaymentsInformationType' => 'EbayWsdl\\PaymentsInformationType',
      'PerformanceDashboardType' => 'EbayWsdl\\PerformanceDashboardType',
      'PickupDetailsType' => 'EbayWsdl\\PickupDetailsType',
      'PickupInStoreDetailsType' => 'EbayWsdl\\PickupInStoreDetailsType',
      'PickupMethodSelectedType' => 'EbayWsdl\\PickupMethodSelectedType',
      'PickupOptionsType' => 'EbayWsdl\\PickupOptionsType',
      'PictureDetailsType' => 'EbayWsdl\\PictureDetailsType',
      'PictureManagerDetailsType' => 'EbayWsdl\\PictureManagerDetailsType',
      'PictureManagerFolderType' => 'EbayWsdl\\PictureManagerFolderType',
      'PictureManagerPictureDisplayType' => 'EbayWsdl\\PictureManagerPictureDisplayType',
      'PictureManagerPictureType' => 'EbayWsdl\\PictureManagerPictureType',
      'PictureManagerSubscriptionType' => 'EbayWsdl\\PictureManagerSubscriptionType',
      'PictureSetMemberType' => 'EbayWsdl\\PictureSetMemberType',
      'PicturesType' => 'EbayWsdl\\PicturesType',
      'PolicyComplianceDashboardType' => 'EbayWsdl\\PolicyComplianceDashboardType',
      'PolicyViolationDurationDetailsType' => 'EbayWsdl\\PolicyViolationDurationDetailsType',
      'PowerSellerDashboardType' => 'EbayWsdl\\PowerSellerDashboardType',
      'PremiumSubscriptionDefinitionType' => 'EbayWsdl\\PremiumSubscriptionDefinitionType',
      'PricingRecommendationsType' => 'EbayWsdl\\PricingRecommendationsType',
      'ProPackEnabledDefinitionType' => 'EbayWsdl\\ProPackEnabledDefinitionType',
      'ProPackPlusEnabledDefinitionType' => 'EbayWsdl\\ProPackPlusEnabledDefinitionType',
      'ProStoresCheckoutPreferenceType' => 'EbayWsdl\\ProStoresCheckoutPreferenceType',
      'ProStoresDetailsType' => 'EbayWsdl\\ProStoresDetailsType',
      'ProductCreationEnabledDefinitionType' => 'EbayWsdl\\ProductCreationEnabledDefinitionType',
      'ProductFamilyType' => 'EbayWsdl\\ProductFamilyType',
      'ProductFinderConstraintType' => 'EbayWsdl\\ProductFinderConstraintType',
      'ProductInfoType' => 'EbayWsdl\\ProductInfoType',
      'ProductListingDetailsType' => 'EbayWsdl\\ProductListingDetailsType',
      'ProductRecommendationsType' => 'EbayWsdl\\ProductRecommendationsType',
      'ProductSearchPageType' => 'EbayWsdl\\ProductSearchPageType',
      'ProductSearchResultType' => 'EbayWsdl\\ProductSearchResultType',
      'ProductSearchType' => 'EbayWsdl\\ProductSearchType',
      'ProductSuggestionType' => 'EbayWsdl\\ProductSuggestionType',
      'ProductSuggestionsType' => 'EbayWsdl\\ProductSuggestionsType',
      'ProductType' => 'EbayWsdl\\ProductType',
      'ProfileCategoryGroupDefinitionType' => 'EbayWsdl\\ProfileCategoryGroupDefinitionType',
      'PromotedItemType' => 'EbayWsdl\\PromotedItemType',
      'PromotionDetailsType' => 'EbayWsdl\\PromotionDetailsType',
      'PromotionRuleArrayType' => 'EbayWsdl\\PromotionRuleArrayType',
      'PromotionRuleType' => 'EbayWsdl\\PromotionRuleType',
      'PromotionalSaleArrayType' => 'EbayWsdl\\PromotionalSaleArrayType',
      'PromotionalSaleDetailsType' => 'EbayWsdl\\PromotionalSaleDetailsType',
      'PromotionalSaleType' => 'EbayWsdl\\PromotionalSaleType',
      'PromotionalShippingDiscountDetailsType' => 'EbayWsdl\\PromotionalShippingDiscountDetailsType',
      'PurchaseReminderEmailPreferencesType' => 'EbayWsdl\\PurchaseReminderEmailPreferencesType',
      'QuantityInfoType' => 'EbayWsdl\\QuantityInfoType',
      'QuantityRestrictionPerBuyerInfoType' => 'EbayWsdl\\QuantityRestrictionPerBuyerInfoType',
      'RateTableDetailsType' => 'EbayWsdl\\RateTableDetailsType',
      'ReasonCodeDetailType' => 'EbayWsdl\\ReasonCodeDetailType',
      'RecommendationType' => 'EbayWsdl\\RecommendationType',
      'RecommendationValidationRulesType' => 'EbayWsdl\\RecommendationValidationRulesType',
      'RecommendationsType' => 'EbayWsdl\\RecommendationsType',
      'RecoupmentPolicyConsentType' => 'EbayWsdl\\RecoupmentPolicyConsentType',
      'RefundArrayType' => 'EbayWsdl\\RefundArrayType',
      'RefundDetailsType' => 'EbayWsdl\\RefundDetailsType',
      'RefundFailureReasonType' => 'EbayWsdl\\RefundFailureReasonType',
      'RefundFundingSourceArrayType' => 'EbayWsdl\\RefundFundingSourceArrayType',
      'RefundFundingSourceType' => 'EbayWsdl\\RefundFundingSourceType',
      'RefundInformationType' => 'EbayWsdl\\RefundInformationType',
      'RefundLineArrayType' => 'EbayWsdl\\RefundLineArrayType',
      'RefundLineType' => 'EbayWsdl\\RefundLineType',
      'RefundTransactionArrayType' => 'EbayWsdl\\RefundTransactionArrayType',
      'RefundTransactionInfoType' => 'EbayWsdl\\RefundTransactionInfoType',
      'RefundTransactionType' => 'EbayWsdl\\RefundTransactionType',
      'RefundType' => 'EbayWsdl\\RefundType',
      'RegionDetailsType' => 'EbayWsdl\\RegionDetailsType',
      'RegionOfOriginDetailsType' => 'EbayWsdl\\RegionOfOriginDetailsType',
      'RegularSubscriptionDefinitionType' => 'EbayWsdl\\RegularSubscriptionDefinitionType',
      'ReminderCustomizationType' => 'EbayWsdl\\ReminderCustomizationType',
      'RemindersType' => 'EbayWsdl\\RemindersType',
      'RequiredSellerActionArrayType' => 'EbayWsdl\\RequiredSellerActionArrayType',
      'ResponseAttributeSetType' => 'EbayWsdl\\ResponseAttributeSetType',
      'RestockingFeeValueDetailsType' => 'EbayWsdl\\RestockingFeeValueDetailsType',
      'ReturnPolicyDetailsType' => 'EbayWsdl\\ReturnPolicyDetailsType',
      'ReturnPolicyEnabledDefinitionType' => 'EbayWsdl\\ReturnPolicyEnabledDefinitionType',
      'ReturnPolicyType' => 'EbayWsdl\\ReturnPolicyType',
      'ReturnsAcceptedDetailsType' => 'EbayWsdl\\ReturnsAcceptedDetailsType',
      'ReturnsWithinDetailsType' => 'EbayWsdl\\ReturnsWithinDetailsType',
      'ReviewDetailsType' => 'EbayWsdl\\ReviewDetailsType',
      'ReviewType' => 'EbayWsdl\\ReviewType',
      'RevisePriceAllowedDefinitionType' => 'EbayWsdl\\RevisePriceAllowedDefinitionType',
      'ReviseQuantityAllowedDefinitionType' => 'EbayWsdl\\ReviseQuantityAllowedDefinitionType',
      'ReviseStatusType' => 'EbayWsdl\\ReviseStatusType',
      'SIFFTASRecommendationsType' => 'EbayWsdl\\SIFFTASRecommendationsType',
      'SKUArrayType' => 'EbayWsdl\\SKUArrayType',
      'SMSSubscriptionType' => 'EbayWsdl\\SMSSubscriptionType',
      'SafePaymentRequiredDefinitionType' => 'EbayWsdl\\SafePaymentRequiredDefinitionType',
      'SalesTaxType' => 'EbayWsdl\\SalesTaxType',
      'ScheduleType' => 'EbayWsdl\\ScheduleType',
      'SchedulingInfoType' => 'EbayWsdl\\SchedulingInfoType',
      'SearchAttributesType' => 'EbayWsdl\\SearchAttributesType',
      'SearchDetailsType' => 'EbayWsdl\\SearchDetailsType',
      'SearchStandingDashboardType' => 'EbayWsdl\\SearchStandingDashboardType',
      'SellerAccountDashboardType' => 'EbayWsdl\\SellerAccountDashboardType',
      'SellerContactDetailsEnabledDefinitionType' => 'EbayWsdl\\SellerContactDetailsEnabledDefinitionType',
      'SellerDashboardAlertType' => 'EbayWsdl\\SellerDashboardAlertType',
      'SellerDiscountsType' => 'EbayWsdl\\SellerDiscountsType',
      'SellerDiscountType' => 'EbayWsdl\\SellerDiscountType',
      'SellerExcludeShipToLocationPreferencesType' => 'EbayWsdl\\SellerExcludeShipToLocationPreferencesType',
      'SellerFavoriteItemPreferencesType' => 'EbayWsdl\\SellerFavoriteItemPreferencesType',
      'SellerFeeDiscountDashboardType' => 'EbayWsdl\\SellerFeeDiscountDashboardType',
      'SellerPaymentPreferencesType' => 'EbayWsdl\\SellerPaymentPreferencesType',
      'SellerPaymentProfileType' => 'EbayWsdl\\SellerPaymentProfileType',
      'SellerPaymentType' => 'EbayWsdl\\SellerPaymentType',
      'SellerProfilePreferencesType' => 'EbayWsdl\\SellerProfilePreferencesType',
      'SellerProfilesType' => 'EbayWsdl\\SellerProfilesType',
      'SellerProvidedTitleSupportedDefinitionType' => 'EbayWsdl\\SellerProvidedTitleSupportedDefinitionType',
      'SellerRatingSummaryArrayType' => 'EbayWsdl\\SellerRatingSummaryArrayType',
      'RecoupmentPolicyDetailsType' => 'EbayWsdl\\RecoupmentPolicyDetailsType',
      'SellerReturnPreferencesType' => 'EbayWsdl\\SellerReturnPreferencesType',
      'SellerReturnProfileType' => 'EbayWsdl\\SellerReturnProfileType',
      'SellerRoleMetricsType' => 'EbayWsdl\\SellerRoleMetricsType',
      'SellerShippingProfileType' => 'EbayWsdl\\SellerShippingProfileType',
      'SellerType' => 'EbayWsdl\\SellerType',
      'SellereBayPaymentProcessConsentCodeType' => 'EbayWsdl\\SellereBayPaymentProcessConsentCodeType',
      'SellingManagerAlertType' => 'EbayWsdl\\SellingManagerAlertType',
      'SellingManagerAutoListAccordingToScheduleType' => 'EbayWsdl\\SellingManagerAutoListAccordingToScheduleType',
      'SellingManagerAutoListMinActiveItemsType' => 'EbayWsdl\\SellingManagerAutoListMinActiveItemsType',
      'SellingManagerAutoListType' => 'EbayWsdl\\SellingManagerAutoListType',
      'SellingManagerAutoRelistType' => 'EbayWsdl\\SellingManagerAutoRelistType',
      'SellingManagerAutoSecondChanceOfferType' => 'EbayWsdl\\SellingManagerAutoSecondChanceOfferType',
      'SellingManagerEmailLogType' => 'EbayWsdl\\SellingManagerEmailLogType',
      'SellingManagerFolderDetailsType' => 'EbayWsdl\\SellingManagerFolderDetailsType',
      'SellingManagerOrderStatusType' => 'EbayWsdl\\SellingManagerOrderStatusType',
      'SellingManagerProductDetailsType' => 'EbayWsdl\\SellingManagerProductDetailsType',
      'SellingManagerProductInventoryStatusType' => 'EbayWsdl\\SellingManagerProductInventoryStatusType',
      'SellingManagerProductSpecificsType' => 'EbayWsdl\\SellingManagerProductSpecificsType',
      'SellingManagerProductType' => 'EbayWsdl\\SellingManagerProductType',
      'SellingManagerSearchType' => 'EbayWsdl\\SellingManagerSearchType',
      'SellingManagerSoldOrderType' => 'EbayWsdl\\SellingManagerSoldOrderType',
      'SellingManagerSoldTransactionType' => 'EbayWsdl\\SellingManagerSoldTransactionType',
      'SellingManagerTemplateDetailsArrayType' => 'EbayWsdl\\SellingManagerTemplateDetailsArrayType',
      'SellingManagerTemplateDetailsType' => 'EbayWsdl\\SellingManagerTemplateDetailsType',
      'SellingManagerVendorDetailsType' => 'EbayWsdl\\SellingManagerVendorDetailsType',
      'SellingStatusType' => 'EbayWsdl\\SellingStatusType',
      'SellingSummaryType' => 'EbayWsdl\\SellingSummaryType',
      'ShipPackageDetailsType' => 'EbayWsdl\\ShipPackageDetailsType',
      'ShipmentLineItemType' => 'EbayWsdl\\ShipmentLineItemType',
      'ShipmentTrackingDetailsType' => 'EbayWsdl\\ShipmentTrackingDetailsType',
      'ShipmentType' => 'EbayWsdl\\ShipmentType',
      'ShippingCarrierDetailsType' => 'EbayWsdl\\ShippingCarrierDetailsType',
      'ShippingCategoryDetailsType' => 'EbayWsdl\\ShippingCategoryDetailsType',
      'ShippingCostPaidByDetailsType' => 'EbayWsdl\\ShippingCostPaidByDetailsType',
      'ShippingDetailsType' => 'EbayWsdl\\ShippingDetailsType',
      'ShippingInsuranceType' => 'EbayWsdl\\ShippingInsuranceType',
      'ShippingLocationDetailsType' => 'EbayWsdl\\ShippingLocationDetailsType',
      'ShippingPackageDetailsType' => 'EbayWsdl\\ShippingPackageDetailsType',
      'ShippingPackageInfoType' => 'EbayWsdl\\ShippingPackageInfoType',
      'ShippingServiceCostOverrideListType' => 'EbayWsdl\\ShippingServiceCostOverrideListType',
      'ShippingServiceCostOverrideType' => 'EbayWsdl\\ShippingServiceCostOverrideType',
      'ShippingServiceDetailsType' => 'EbayWsdl\\ShippingServiceDetailsType',
      'ShippingServiceOptionsType' => 'EbayWsdl\\ShippingServiceOptionsType',
      'ShippingServicePackageDetailsType' => 'EbayWsdl\\ShippingServicePackageDetailsType',
      'ShippingTermRequiredDefinitionType' => 'EbayWsdl\\ShippingTermRequiredDefinitionType',
      'SiteBuyerRequirementDetailsType' => 'EbayWsdl\\SiteBuyerRequirementDetailsType',
      'SiteDefaultsType' => 'EbayWsdl\\SiteDefaultsType',
      'SiteDetailsType' => 'EbayWsdl\\SiteDetailsType',
      'SiteHostedPictureDetailsType' => 'EbayWsdl\\SiteHostedPictureDetailsType',
      'SiteLocationType' => 'EbayWsdl\\SiteLocationType',
      'SiteWideCharacteristicsType' => 'EbayWsdl\\SiteWideCharacteristicsType',
      'SkypeMeNonTransactionalEnabledDefinitionType' => 'EbayWsdl\\SkypeMeNonTransactionalEnabledDefinitionType',
      'SkypeMeTransactionalEnabledDefinitionType' => 'EbayWsdl\\SkypeMeTransactionalEnabledDefinitionType',
      'SpecialitySubscriptionDefinitionType' => 'EbayWsdl\\SpecialitySubscriptionDefinitionType',
      'StoreColorSchemeArrayType' => 'EbayWsdl\\StoreColorSchemeArrayType',
      'StoreColorSchemeType' => 'EbayWsdl\\StoreColorSchemeType',
      'StoreColorType' => 'EbayWsdl\\StoreColorType',
      'StoreCustomCategoryArrayType' => 'EbayWsdl\\StoreCustomCategoryArrayType',
      'StoreCustomCategoryType' => 'EbayWsdl\\StoreCustomCategoryType',
      'StoreCustomListingHeaderLinkType' => 'EbayWsdl\\StoreCustomListingHeaderLinkType',
      'StoreCustomListingHeaderType' => 'EbayWsdl\\StoreCustomListingHeaderType',
      'StoreCustomPageArrayType' => 'EbayWsdl\\StoreCustomPageArrayType',
      'StoreCustomPageType' => 'EbayWsdl\\StoreCustomPageType',
      'StoreFontType' => 'EbayWsdl\\StoreFontType',
      'StoreInventoryEnabledDefinitionType' => 'EbayWsdl\\StoreInventoryEnabledDefinitionType',
      'StoreLogoArrayType' => 'EbayWsdl\\StoreLogoArrayType',
      'StoreLogoType' => 'EbayWsdl\\StoreLogoType',
      'StoreOwnerExtendedListingDurationsDefinitionType' => 'EbayWsdl\\StoreOwnerExtendedListingDurationsDefinitionType',
      'StoreOwnerExtendedListingDurationsEnabledDefinitionType' => 'EbayWsdl\\StoreOwnerExtendedListingDurationsEnabledDefinitionType',
      'StoreOwnerExtendedListingDurationsType' => 'EbayWsdl\\StoreOwnerExtendedListingDurationsType',
      'StorePreferencesType' => 'EbayWsdl\\StorePreferencesType',
      'StoreSubscriptionArrayType' => 'EbayWsdl\\StoreSubscriptionArrayType',
      'StoreSubscriptionType' => 'EbayWsdl\\StoreSubscriptionType',
      'StoreThemeArrayType' => 'EbayWsdl\\StoreThemeArrayType',
      'StoreThemeType' => 'EbayWsdl\\StoreThemeType',
      'StoreType' => 'EbayWsdl\\StoreType',
      'StoreVacationPreferencesType' => 'EbayWsdl\\StoreVacationPreferencesType',
      'StorefrontType' => 'EbayWsdl\\StorefrontType',
      'SubscriptionType' => 'EbayWsdl\\SubscriptionType',
      'SuggestedCategoryArrayType' => 'EbayWsdl\\SuggestedCategoryArrayType',
      'SuggestedCategoryType' => 'EbayWsdl\\SuggestedCategoryType',
      'SummaryEventScheduleType' => 'EbayWsdl\\SummaryEventScheduleType',
      'SupportedEventTypesArrayType' => 'EbayWsdl\\SupportedEventTypesArrayType',
      'SupportedSellerProfileType' => 'EbayWsdl\\SupportedSellerProfileType',
      'SupportedSellerProfilesType' => 'EbayWsdl\\SupportedSellerProfilesType',
      'TCREnabledDefinitionType' => 'EbayWsdl\\TCREnabledDefinitionType',
      'TaxDetailsType' => 'EbayWsdl\\TaxDetailsType',
      'TaxJurisdictionType' => 'EbayWsdl\\TaxJurisdictionType',
      'TaxTableType' => 'EbayWsdl\\TaxTableType',
      'TaxesType' => 'EbayWsdl\\TaxesType',
      'ThemeGroupType' => 'EbayWsdl\\ThemeGroupType',
      'TicketListingDetailsType' => 'EbayWsdl\\TicketListingDetailsType',
      'TimeRangeType' => 'EbayWsdl\\TimeRangeType',
      'TimeZoneDetailsType' => 'EbayWsdl\\TimeZoneDetailsType',
      'TokenStatusType' => 'EbayWsdl\\TokenStatusType',
      'TopRatedSellerDetailsType' => 'EbayWsdl\\TopRatedSellerDetailsType',
      'TransactionArrayType' => 'EbayWsdl\\TransactionArrayType',
      'TransactionReferenceType' => 'EbayWsdl\\TransactionReferenceType',
      'TransactionStatusType' => 'EbayWsdl\\TransactionStatusType',
      'TransactionType' => 'EbayWsdl\\TransactionType',
      'UPCIdentifierEnabledDefinitionType' => 'EbayWsdl\\UPCIdentifierEnabledDefinitionType',
      'URLDetailsType' => 'EbayWsdl\\URLDetailsType',
      'UnitInfoType' => 'EbayWsdl\\UnitInfoType',
      'UnitOfMeasurementDetailsType' => 'EbayWsdl\\UnitOfMeasurementDetailsType',
      'UnitOfMeasurementType' => 'EbayWsdl\\UnitOfMeasurementType',
      'UnpaidItemAssistancePreferencesType' => 'EbayWsdl\\UnpaidItemAssistancePreferencesType',
      'UnpaidItemType' => 'EbayWsdl\\UnpaidItemType',
      'UserAgreementInfoType' => 'EbayWsdl\\UserAgreementInfoType',
      'UserConsentRequiredDefinitionType' => 'EbayWsdl\\UserConsentRequiredDefinitionType',
      'UserDefinedListType' => 'EbayWsdl\\UserDefinedListType',
      'UserIDArrayType' => 'EbayWsdl\\UserIDArrayType',
      'UserIdentityType' => 'EbayWsdl\\UserIdentityType',
      'UserType' => 'EbayWsdl\\UserType',
      'VATDetailsType' => 'EbayWsdl\\VATDetailsType',
      'VATRateType' => 'EbayWsdl\\VATRateType',
      'VINSupportedDefinitionType' => 'EbayWsdl\\VINSupportedDefinitionType',
      'VRMSupportedDefinitionType' => 'EbayWsdl\\VRMSupportedDefinitionType',
      'ValType' => 'EbayWsdl\\ValType',
      'ValueCategoryDefinitionType' => 'EbayWsdl\\ValueCategoryDefinitionType',
      'ValuePackEnabledDefinitionType' => 'EbayWsdl\\ValuePackEnabledDefinitionType',
      'ValueRecommendationType' => 'EbayWsdl\\ValueRecommendationType',
      'VariationDetailsType' => 'EbayWsdl\\VariationDetailsType',
      'VariationKeyType' => 'EbayWsdl\\VariationKeyType',
      'VariationSpecificPictureSetType' => 'EbayWsdl\\VariationSpecificPictureSetType',
      'VariationType' => 'EbayWsdl\\VariationType',
      'VariationsEnabledDefinitionType' => 'EbayWsdl\\VariationsEnabledDefinitionType',
      'VariationsType' => 'EbayWsdl\\VariationsType',
      'VeROReasonCodeDetailsType' => 'EbayWsdl\\VeROReasonCodeDetailsType',
      'VeROReportItemType' => 'EbayWsdl\\VeROReportItemType',
      'VeROReportItemsType' => 'EbayWsdl\\VeROReportItemsType',
      'VeROReportedItemDetailsType' => 'EbayWsdl\\VeROReportedItemDetailsType',
      'VeROReportedItemType' => 'EbayWsdl\\VeROReportedItemType',
      'VeROSiteDetailType' => 'EbayWsdl\\VeROSiteDetailType',
      'VerifiedUserRequirementsDetailsType' => 'EbayWsdl\\VerifiedUserRequirementsDetailsType',
      'VerifiedUserRequirementsType' => 'EbayWsdl\\VerifiedUserRequirementsType',
      'WantItNowPostArrayType' => 'EbayWsdl\\WantItNowPostArrayType',
      'WantItNowPostType' => 'EbayWsdl\\WantItNowPostType',
      'WarrantyDurationDetailsType' => 'EbayWsdl\\WarrantyDurationDetailsType',
      'WarrantyOfferedDetailsType' => 'EbayWsdl\\WarrantyOfferedDetailsType',
      'WarrantyTypeDetailsType' => 'EbayWsdl\\WarrantyTypeDetailsType',
      'XSLFileType' => 'EbayWsdl\\XSLFileType',
      'eBayMotorsProAdFormatEnabledDefinitionType' => 'EbayWsdl\\eBayMotorsProAdFormatEnabledDefinitionType',
      'eBayMotorsProAutoAcceptEnabledDefinitionType' => 'EbayWsdl\\eBayMotorsProAutoAcceptEnabledDefinitionType',
      'eBayMotorsProAutoDeclineEnabledDefinitionType' => 'EbayWsdl\\eBayMotorsProAutoDeclineEnabledDefinitionType',
      'eBayMotorsProBestOfferEnabledDefinitionType' => 'EbayWsdl\\eBayMotorsProBestOfferEnabledDefinitionType',
      'eBayMotorsProCompanyNameEnabledDefinitionType' => 'EbayWsdl\\eBayMotorsProCompanyNameEnabledDefinitionType',
      'eBayMotorsProContactByAddressEnabledDefinitionType' => 'EbayWsdl\\eBayMotorsProContactByAddressEnabledDefinitionType',
      'eBayMotorsProContactByEmailEnabledDefinitionType' => 'EbayWsdl\\eBayMotorsProContactByEmailEnabledDefinitionType',
      'eBayMotorsProContactByPhoneEnabledDefinitionType' => 'EbayWsdl\\eBayMotorsProContactByPhoneEnabledDefinitionType',
      'eBayMotorsProCounterOfferEnabledDefinitionType' => 'EbayWsdl\\eBayMotorsProCounterOfferEnabledDefinitionType',
      'eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType' => 'EbayWsdl\\eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType',
      'eBayMotorsProPhoneCountDefinitionType' => 'EbayWsdl\\eBayMotorsProPhoneCountDefinitionType',
      'eBayMotorsProSellerContactDetailsEnabledDefinitionType' => 'EbayWsdl\\eBayMotorsProSellerContactDetailsEnabledDefinitionType',
      'eBayMotorsProShippingMethodEnabledDefinitionType' => 'EbayWsdl\\eBayMotorsProShippingMethodEnabledDefinitionType',
      'eBayMotorsProStreetCountDefinitionType' => 'EbayWsdl\\eBayMotorsProStreetCountDefinitionType',
      'eBayPaymentMismatchDetailsType' => 'EbayWsdl\\eBayPaymentMismatchDetailsType',
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
