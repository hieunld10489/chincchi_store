<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'Common_Index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\CommonController::Common_IndexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Common_Index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Common_Backup' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\CommonController::Common_BackupAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Common_Backup',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Common_Restore' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\CommonController::Common_RestoreAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Common_Restore',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Customer_Load' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\CustomerController::Customer_LoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Customer_Load',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Customer_LoadAll' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\CustomerController::Customer_LoadAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Customer_LoadAll',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Customer_Update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\CustomerController::Customer_UpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Customer_Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Customer_Delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\CustomerController::Customer_DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Customer_Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Customer_LoadLastCode' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\CustomerController::Customer_LoadLastCodeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Customer_LoadLastCode',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Delivery_InvoiceLoad' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\DeliveryController::Delivery_InvoiceLoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Delivery_InvoiceLoad',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Delivery_DriverInvoiceLoad' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\DeliveryController::Delivery_DriverInvoiceLoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Delivery_DriverInvoiceLoad',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Delivery_AddDriverInvoice' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\DeliveryController::Delivery_AddDriverInvoiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Delivery_AddDriverInvoice',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Delivery_Delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\DeliveryController::Delivery_DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Delivery_Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Distributor_Load' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\DistributorController::Distributor_LoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Distributor_Load',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Distributor_LoadAll' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\DistributorController::Distributor_LoadAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Distributor_LoadAll',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Distributor_Update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\DistributorController::Distributor_UpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Distributor_Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Distributor_Delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\DistributorController::Distributor_DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Distributor_Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Distributor_LoadLastCode' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\DistributorController::Distributor_LoadLastCodeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Distributor_LoadLastCode',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Driver_Load' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\DriverController::Driver_LoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Driver_Load',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Driver_Update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\DriverController::Driver_UpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Driver_Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Driver_Delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\DriverController::Driver_DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Driver_Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Invoice_Load' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\InvoicesController::Invoice_LoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Invoice_Load',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Invoice_Delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\InvoicesController::Invoice_DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Invoice_Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Input_Load' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\InvoicesController::Input_LoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Input_Load',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Input_Update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\InvoicesController::Input_UpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Input_Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Input_Delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\InvoicesController::Input_DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Input_Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'List_Output_Load' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\InvoicesController::List_Output_LoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/List_Output_Load',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Liabilities_Load' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_LoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Liabilities_Load',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Liabilities_Customer_Load' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_Customer_LoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Liabilities_Customer_Load',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Liabilities_Name_Load' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_Name_LoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Liabilities_Name_Load',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Liabilities_Save' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_SaveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Liabilities_Save',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Liabilities_Delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Liabilities_Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Liabilities_AcceptAll' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_AcceptAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Liabilities_AcceptAll',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Liabilities_AcceptDelivery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_AcceptDeliveryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Liabilities_AcceptDelivery',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Liabilities_UnAcceptDelivery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_UnAcceptDeliveryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Liabilities_UnAcceptDelivery',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Product_Load' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\ProductController::Product_LoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Product_Load',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Product_LoadAll' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\ProductController::Product_LoadAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Product_LoadAll',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Product_Update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\ProductController::Product_UpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Product_Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Product_Delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\ProductController::Product_DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Product_Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Product_LoadUnitByProductId' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\ProductController::Product_LoadUnitByProductIdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Product_LoadUnitByProductId',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Report_InventoryLoad' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\ReportController::Report_InventoryLoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Report_InventoryLoad',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Report_RevenueLoad' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\ReportController::Report_RevenueLoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Report_RevenueLoad',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Unit_Load' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\UnitController::Unit_LoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Unit_Load',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Unit_LoadAll' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\UnitController::Unit_LoadAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Unit_LoadAll',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Unit_Update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\UnitController::Unit_UpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Unit_Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Unit_Delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\UnitController::Unit_DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Unit_Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'User_Load' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\UserController::User_LoadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User_Load',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'User_Update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\UserController::User_UpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User_Update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'User_Delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\UserController::User_DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User_Delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'User_ChangePassword' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\UserController::User_ChangePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User_ChangePassword',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'User_ChangeProfile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\UserController::User_ChangeProfileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/User_ChangeProfile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_auth' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/authenticate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user_logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sof\\ApiBundle\\Controller\\CommonController::Common_IndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}