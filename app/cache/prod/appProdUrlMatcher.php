<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/C')) {
            if (0 === strpos($pathinfo, '/Common_')) {
                // Common_Index
                if ($pathinfo === '/Common_Index') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_Common_Index;
                    }

                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\CommonController::Common_IndexAction',  '_route' => 'Common_Index',);
                }
                not_Common_Index:

                // Common_Backup
                if ($pathinfo === '/Common_Backup') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_Common_Backup;
                    }

                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\CommonController::Common_BackupAction',  '_route' => 'Common_Backup',);
                }
                not_Common_Backup:

                // Common_Restore
                if ($pathinfo === '/Common_Restore') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_Common_Restore;
                    }

                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\CommonController::Common_RestoreAction',  '_route' => 'Common_Restore',);
                }
                not_Common_Restore:

            }

            if (0 === strpos($pathinfo, '/Customer_')) {
                if (0 === strpos($pathinfo, '/Customer_Load')) {
                    // Customer_Load
                    if ($pathinfo === '/Customer_Load') {
                        return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\CustomerController::Customer_LoadAction',  '_route' => 'Customer_Load',);
                    }

                    // Customer_LoadAll
                    if ($pathinfo === '/Customer_LoadAll') {
                        return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\CustomerController::Customer_LoadAllAction',  '_route' => 'Customer_LoadAll',);
                    }

                }

                // Customer_Update
                if ($pathinfo === '/Customer_Update') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\CustomerController::Customer_UpdateAction',  '_route' => 'Customer_Update',);
                }

                // Customer_Delete
                if ($pathinfo === '/Customer_Delete') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\CustomerController::Customer_DeleteAction',  '_route' => 'Customer_Delete',);
                }

                // Customer_LoadLastCode
                if ($pathinfo === '/Customer_LoadLastCode') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\CustomerController::Customer_LoadLastCodeAction',  '_route' => 'Customer_LoadLastCode',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/D')) {
            if (0 === strpos($pathinfo, '/Delivery_')) {
                // Delivery_InvoiceLoad
                if ($pathinfo === '/Delivery_InvoiceLoad') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\DeliveryController::Delivery_InvoiceLoadAction',  '_route' => 'Delivery_InvoiceLoad',);
                }

                // Delivery_DriverInvoiceLoad
                if ($pathinfo === '/Delivery_DriverInvoiceLoad') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\DeliveryController::Delivery_DriverInvoiceLoadAction',  '_route' => 'Delivery_DriverInvoiceLoad',);
                }

                // Delivery_AddDriverInvoice
                if ($pathinfo === '/Delivery_AddDriverInvoice') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\DeliveryController::Delivery_AddDriverInvoiceAction',  '_route' => 'Delivery_AddDriverInvoice',);
                }

                // Delivery_Delete
                if ($pathinfo === '/Delivery_Delete') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\DeliveryController::Delivery_DeleteAction',  '_route' => 'Delivery_Delete',);
                }

            }

            if (0 === strpos($pathinfo, '/Distributor_')) {
                if (0 === strpos($pathinfo, '/Distributor_Load')) {
                    // Distributor_Load
                    if ($pathinfo === '/Distributor_Load') {
                        return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\DistributorController::Distributor_LoadAction',  '_route' => 'Distributor_Load',);
                    }

                    // Distributor_LoadAll
                    if ($pathinfo === '/Distributor_LoadAll') {
                        return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\DistributorController::Distributor_LoadAllAction',  '_route' => 'Distributor_LoadAll',);
                    }

                }

                // Distributor_Update
                if ($pathinfo === '/Distributor_Update') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\DistributorController::Distributor_UpdateAction',  '_route' => 'Distributor_Update',);
                }

                // Distributor_Delete
                if ($pathinfo === '/Distributor_Delete') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\DistributorController::Distributor_DeleteAction',  '_route' => 'Distributor_Delete',);
                }

                // Distributor_LoadLastCode
                if ($pathinfo === '/Distributor_LoadLastCode') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\DistributorController::Distributor_LoadLastCodeAction',  '_route' => 'Distributor_LoadLastCode',);
                }

            }

            if (0 === strpos($pathinfo, '/Driver_')) {
                // Driver_Load
                if ($pathinfo === '/Driver_Load') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\DriverController::Driver_LoadAction',  '_route' => 'Driver_Load',);
                }

                // Driver_Update
                if ($pathinfo === '/Driver_Update') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\DriverController::Driver_UpdateAction',  '_route' => 'Driver_Update',);
                }

                // Driver_Delete
                if ($pathinfo === '/Driver_Delete') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\DriverController::Driver_DeleteAction',  '_route' => 'Driver_Delete',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/In')) {
            if (0 === strpos($pathinfo, '/Invoice_')) {
                // Invoice_Load
                if ($pathinfo === '/Invoice_Load') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\InvoicesController::Invoice_LoadAction',  '_route' => 'Invoice_Load',);
                }

                // Invoice_Delete
                if ($pathinfo === '/Invoice_Delete') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\InvoicesController::Invoice_DeleteAction',  '_route' => 'Invoice_Delete',);
                }

            }

            if (0 === strpos($pathinfo, '/Input_')) {
                // Input_Load
                if ($pathinfo === '/Input_Load') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\InvoicesController::Input_LoadAction',  '_route' => 'Input_Load',);
                }

                // Input_Update
                if ($pathinfo === '/Input_Update') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\InvoicesController::Input_UpdateAction',  '_route' => 'Input_Update',);
                }

                // Input_Delete
                if ($pathinfo === '/Input_Delete') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\InvoicesController::Input_DeleteAction',  '_route' => 'Input_Delete',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/Li')) {
            // List_Output_Load
            if ($pathinfo === '/List_Output_Load') {
                return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\InvoicesController::List_Output_LoadAction',  '_route' => 'List_Output_Load',);
            }

            if (0 === strpos($pathinfo, '/Liabilities_')) {
                // Liabilities_Load
                if ($pathinfo === '/Liabilities_Load') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_LoadAction',  '_route' => 'Liabilities_Load',);
                }

                // Liabilities_Customer_Load
                if ($pathinfo === '/Liabilities_Customer_Load') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_Customer_LoadAction',  '_route' => 'Liabilities_Customer_Load',);
                }

                // Liabilities_Name_Load
                if ($pathinfo === '/Liabilities_Name_Load') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_Name_LoadAction',  '_route' => 'Liabilities_Name_Load',);
                }

                // Liabilities_Save
                if ($pathinfo === '/Liabilities_Save') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_SaveAction',  '_route' => 'Liabilities_Save',);
                }

                // Liabilities_Delete
                if ($pathinfo === '/Liabilities_Delete') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_DeleteAction',  '_route' => 'Liabilities_Delete',);
                }

                if (0 === strpos($pathinfo, '/Liabilities_Accept')) {
                    // Liabilities_AcceptAll
                    if ($pathinfo === '/Liabilities_AcceptAll') {
                        return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_AcceptAllAction',  '_route' => 'Liabilities_AcceptAll',);
                    }

                    // Liabilities_AcceptDelivery
                    if ($pathinfo === '/Liabilities_AcceptDelivery') {
                        return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_AcceptDeliveryAction',  '_route' => 'Liabilities_AcceptDelivery',);
                    }

                }

                // Liabilities_UnAcceptDelivery
                if ($pathinfo === '/Liabilities_UnAcceptDelivery') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\LiabilitiesController::Liabilities_UnAcceptDeliveryAction',  '_route' => 'Liabilities_UnAcceptDelivery',);
                }

            }

        }

        // user_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\LoginController::loginAction',  '_route' => 'user_login',);
        }

        if (0 === strpos($pathinfo, '/Product_')) {
            if (0 === strpos($pathinfo, '/Product_Load')) {
                // Product_Load
                if ($pathinfo === '/Product_Load') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\ProductController::Product_LoadAction',  '_route' => 'Product_Load',);
                }

                // Product_LoadAll
                if ($pathinfo === '/Product_LoadAll') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\ProductController::Product_LoadAllAction',  '_route' => 'Product_LoadAll',);
                }

            }

            // Product_Update
            if ($pathinfo === '/Product_Update') {
                return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\ProductController::Product_UpdateAction',  '_route' => 'Product_Update',);
            }

            // Product_Delete
            if ($pathinfo === '/Product_Delete') {
                return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\ProductController::Product_DeleteAction',  '_route' => 'Product_Delete',);
            }

            // Product_LoadUnitByProductId
            if ($pathinfo === '/Product_LoadUnitByProductId') {
                return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\ProductController::Product_LoadUnitByProductIdAction',  '_route' => 'Product_LoadUnitByProductId',);
            }

        }

        if (0 === strpos($pathinfo, '/Report_')) {
            // Report_InventoryLoad
            if ($pathinfo === '/Report_InventoryLoad') {
                return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\ReportController::Report_InventoryLoadAction',  '_route' => 'Report_InventoryLoad',);
            }

            // Report_RevenueLoad
            if ($pathinfo === '/Report_RevenueLoad') {
                return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\ReportController::Report_RevenueLoadAction',  '_route' => 'Report_RevenueLoad',);
            }

        }

        if (0 === strpos($pathinfo, '/U')) {
            if (0 === strpos($pathinfo, '/Unit_')) {
                if (0 === strpos($pathinfo, '/Unit_Load')) {
                    // Unit_Load
                    if ($pathinfo === '/Unit_Load') {
                        return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\UnitController::Unit_LoadAction',  '_route' => 'Unit_Load',);
                    }

                    // Unit_LoadAll
                    if ($pathinfo === '/Unit_LoadAll') {
                        return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\UnitController::Unit_LoadAllAction',  '_route' => 'Unit_LoadAll',);
                    }

                }

                // Unit_Update
                if ($pathinfo === '/Unit_Update') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\UnitController::Unit_UpdateAction',  '_route' => 'Unit_Update',);
                }

                // Unit_Delete
                if ($pathinfo === '/Unit_Delete') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\UnitController::Unit_DeleteAction',  '_route' => 'Unit_Delete',);
                }

            }

            if (0 === strpos($pathinfo, '/User_')) {
                // User_Load
                if ($pathinfo === '/User_Load') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\UserController::User_LoadAction',  '_route' => 'User_Load',);
                }

                // User_Update
                if ($pathinfo === '/User_Update') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\UserController::User_UpdateAction',  '_route' => 'User_Update',);
                }

                // User_Delete
                if ($pathinfo === '/User_Delete') {
                    return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\UserController::User_DeleteAction',  '_route' => 'User_Delete',);
                }

                if (0 === strpos($pathinfo, '/User_ChangeP')) {
                    // User_ChangePassword
                    if ($pathinfo === '/User_ChangePassword') {
                        return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\UserController::User_ChangePasswordAction',  '_route' => 'User_ChangePassword',);
                    }

                    // User_ChangeProfile
                    if ($pathinfo === '/User_ChangeProfile') {
                        return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\UserController::User_ChangeProfileAction',  '_route' => 'User_ChangeProfile',);
                    }

                }

            }

        }

        // user_auth
        if ($pathinfo === '/authenticate') {
            return array('_route' => 'user_auth');
        }

        // user_logout
        if ($pathinfo === '/user_logout') {
            return array('_route' => 'user_logout');
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Sof\\ApiBundle\\Controller\\CommonController::Common_IndexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
